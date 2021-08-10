<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\SlideModel;
use App\Models\DirectionsCardModel;
use App\Models\ContactModel;
use App\Models\PresentationModel;
use App\Models\MapModel;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;


class MainController extends Controller
{
// Главная страница
    public function home(){

        $slides= new SlideModel();
        $directions_card = new DirectionsCardModel();
        $contact = new ContactModel();
        $mapid='RU-KYA';
    
        return view('home',['slides'=>$slides->all()],['directions_card'=>$directions_card->all(),'contact'=>$contact->all(),'mapid'=>$mapid]);
    }
// Проброс данных в админку
    public function admin(){
        $slide = new SlideModel();
        $directions_card = new DirectionsCardModel();
        $contact = new ContactModel();
        $presentation = new PresentationModel();
        $map= new MapModel();

        return view('admin',['slide'=>$slide->all(),'directions_card'=>$directions_card->all(),'contact'=>$contact->all(),'presentation'=>$presentation->all(),'map'=>$map->all()]);
    }

// Для просмотра и загрузки презентаций
    public function download(){
        $presentation = new PresentationModel();
        return view('download',['presentation'=>$presentation->all()]);
    }

// Для создания слайда
    public function create_slide(Request $request){

        $valid = $request->validate([
            'slide_image'=>'required',
            'slide_title'=>'required|max:40',
            'slide_body'=>'required|max:150',
        ]);
         
        $image = $request->file('slide_image')->store('storage', 'slider_image');
        
        $img = Image::make( $request->file('slide_image'))->fit(535, 387)->save('storage/slider_image/'.$image);


        $slide = new SlideModel();
        $slide->slide_image = $image;
        $slide->slide_title = $request->input('slide_title');
        $slide->slide_body = $request->input('slide_body');

        $slide->save();

        return redirect()->route('admin');
    }

// Для редактирования слайда
    public function edit_slide($id){

        $slide = new SlideModel;

        return view('editslide',['slide'=>$slide->find($id)]);
    }

// Для обновления слайда
    public function update_slide($id, Request $request){

        $valid = $request->validate([
            // 'slide_image'=>'required',
            'slide_title'=>'required|max:40',
            'slide_body'=>'required|max:150',
        ]);
        
        if($request->file('slide_image')){

            Storage::disk('slider_image')->delete(SlideModel::find($id)->slide_image);

            $image = $request->file('slide_image')->store('storage', 'slider_image');
            
            Image::make( $request->file('slide_image'))->fit(535, 387)->save('storage/slider_image/'.$image);
        }else{
            $image = SlideModel::find($id)->slide_image;
        }
    

        $slide = SlideModel::find($id);
        $slide->slide_image = $image;
        $slide->slide_title = $request->input('slide_title');
        $slide->slide_body = $request->input('slide_body');

        $slide->save();

        return redirect()->route('admin');
    }

// Для удаления слайда
    public function dell_slide($id){

        $slide = SlideModel::find($id);

        Storage::disk('slider_image')->delete($slide->slide_image);

        $slide->delete();

        return redirect()->route('admin');
    }

//Создание карточки направления
    public function create_direction_card(Request $request){

        $valid = $request->validate([
            'direction_card_image'=>'required',
            'direction_card_title'=>'required|max:40',
            'direction_card_link'=>'required|max:40',
        ]);

        $image = $request->file('direction_card_image')->store('storage', 'directions_image');

        Image::make( $request->file('direction_card_image'))->fit(398, 263)->save('storage/directions_image/mob_img/'.$image);
        Image::make( $request->file('direction_card_image'))->fit(190)->save('storage/directions_image/'.$image);

        $directions_card = new DirectionsCardModel();
        $directions_card->directions_card_image = $image;
        $directions_card->directions_card_title = $request->input('direction_card_title');
        $directions_card->directions_card_link = $request->input('direction_card_link');

        $directions_card->save();

        return redirect()->route('admin');
    }

// Для редактирования карточки направления
    public function edit_directions_card($id){

        $dcard = new DirectionsCardModel;

        return view('editdcard',['dcard'=>$dcard->find($id)]);
    }

// Для обновления карточки направления
    public function update_direction_card($id, Request $request){

        $valid = $request->validate([
            'direction_card_title'=>'required|max:40',
            'direction_card_link'=>'required|max:40',
        ]);

        if($request->file('direction_card_image')){

            Storage::disk('directions_image')->delete(DirectionsCardModel::find($id)->directions_card_image);
            Storage::disk('directions_image')->delete('mob_img/'.DirectionsCardModel::find($id)->directions_card_image);

            $image = $request->file('direction_card_image')->store('storage', 'directions_image');

            Image::make( $request->file('direction_card_image'))->fit(398, 263)->save('storage/directions_image/mob_img/'.$image);
            Image::make( $request->file('direction_card_image'))->fit(190)->save('storage/directions_image/'.$image);
        }else{
            $image = DirectionsCardModel::find($id)->directions_card_image;
        }

        $directions_card = DirectionsCardModel::find($id);
        $directions_card->directions_card_image = $image;
        $directions_card->directions_card_title = $request->input('direction_card_title');
        $directions_card->directions_card_link = $request->input('direction_card_link');

        $directions_card->save();

        return redirect()->route('admin');
    }

// Для удаления карточек направления
    public function dell_directions_card($id){

        $dcard = DirectionsCardModel::find($id);

        Storage::disk('directions_image')->delete($dcard->directions_card_image);
        Storage::disk('directions_image')->delete('mob_img/'.$dcard->directions_card_image);
        
        $dcard->delete();

        return redirect()->route('admin');

    }
    
//Создание карточки кнтактов
        public function create_contact(Request $request){

            $valid = $request->validate([
                'contact_image'=>'required',
                'contact_body'=>'required|max:200',
                'contact_phone'=>'required|max:150',
                'contact_mail'=>'required|max:150',
            ]);

            $image = $request->file('contact_image')->store('storage', 'contacts_image');

            $img = Image::make( $request->file('contact_image'))->resize(111, 26)->save('storage/contacts_image/'.$image);
    
            $contact = new ContactModel();
            $contact->contact_image = $image;
            $contact->contact_body = $request->input('contact_body');
            $contact->contact_phone = $request->input('contact_phone');
            $contact->contact_mail = $request->input('contact_mail');
    
            $contact->save();
    
            return redirect()->route('admin');

    }

// Редактирование карточки направления
    public function edit_contact($id){

        $contact = new ContactModel;

        return view('editcontact',['contact'=>$contact->find($id)]);
    }

//Обновление карточки кнтактов
    public function update_contact($id, Request $request){

        $valid = $request->validate([
            'contact_body'=>'required|max:200',
            'contact_phone'=>'required|max:150',
            'contact_mail'=>'required|max:150',
        ]);

        if($request->file('contact_image')){
            $image = $request->file('contact_image')->store('storage', 'contacts_image');

            $img = Image::make( $request->file('contact_image'))->resize(111, 26)->save('storage/contacts_image/'.$image);

            Storage::disk('contacts_image')->delete(ContactModel::find($id)->contact_image);

        }else{
            $image = ContactModel::find($id)->contact_image;
        }

        $contact = ContactModel::find($id);
        $contact->contact_image = $image;
        $contact->contact_body = $request->input('contact_body');
        $contact->contact_phone = $request->input('contact_phone');
        $contact->contact_mail = $request->input('contact_mail');

        $contact->save();

        return redirect()->route('admin');
}

// Для удаления карточек контактов
        public function dell_contact($id){

            $contact = ContactModel::find($id);
            
            Storage::disk('contacts_image')->delete($contact->contact_image);
            
            $contact->delete();

            return redirect()->route('admin');

        }


//Создание презентации
        public function create_presentation(Request $request){
            $valid = $request->validate([
                'presentation_image'=>'required',
                'presentation_file'=>'required',
                'presentation_title'=>'required',
                'presentation_subtitle'=>'required',
            ]);
            $image = $request->file('presentation_image')->store('storage', 'presentation_image');
            $img = Image::make( $request->file('presentation_image'))->fit(190, 190)->save('storage/presentation_image/'.$image);
            $file = $request->file('presentation_file')->store('storage', 'presentation_file');
            $presentation = new PresentationModel();
            $presentation->presentation_file = $file;
            $presentation->presentation_image = $image;
            $presentation->presentation_title = $request->input('presentation_title');
            $presentation->presentation_subtitle = $request->input('presentation_subtitle');
            

            $presentation->save();

            return redirect()->route('admin');
    }

// Редактирование карточки направления
    public function edit_presentation($id){

        $presentation = new PresentationModel;

        return view('editpresentation',['presentation'=>$presentation->find($id)]);
    }

//обновление презентации
    public function update_presentation($id, Request $request){
        $valid = $request->validate([
            'presentation_title'=>'required',
            'presentation_subtitle'=>'required',
        ]);

        if($request->file('presentation_image')){
            $image = $request->file('presentation_image')->store('storage', 'presentation_image');
            $img = Image::make( $request->file('presentation_image'))->fit(190, 190)->save('storage/presentation_image/'.$image);
        }else{
            $image = PresentationModel::find($id)->presentation_image;
        }

        if($request->file('presentation_file')){
            $file = $request->file('presentation_file')->store('storage', 'presentation_file');
        }else{
            $file = PresentationModel::find($id)->presentation_file;
        }

        $presentation = PresentationModel::find($id);
        $presentation->presentation_file = $file;
        $presentation->presentation_image = $image;
        $presentation->presentation_title = $request->input('presentation_title');
        $presentation->presentation_subtitle = $request->input('presentation_subtitle');


        $presentation->save();

        return redirect()->route('admin');
    }

// Для удаления презентации
        public function dell_presentation($id){

            $presentation = PresentationModel::find($id);
            
            Storage::disk('presentation_image')->delete($presentation->presentation_image);

            Storage::disk('presentation_file')->delete($presentation->presentation_file);
            
            $presentation->delete();

            return redirect()->route('admin');

        }

// Для Скачивания презентации
        public function download_presentation($id){
            $presentation = PresentationModel::find($id);

            $file= public_path()."/storage/presentation_file/$presentation->presentation_file";

            $name = $presentation->presentation_title.".pdf";

            $headers = array(
                'Content-Type: application/pdf',
            );

            return response()->download($file, $name, $headers);

        }

// Для обновления карты
        public function update_map(Request $request){

            $r=$request->all();
            unset($r['_token']);
            
            $keys=array_keys($r);

            DB::table('map_models')->whereIn('id_region',$keys)->update(["status_region"=>1]);
            DB::table('map_models')->whereNotIn('id_region',$keys)->update(["status_region"=>0]);
            
            
            // MapModel::insert(array(
            //     ["id_region"=>"RU-MOW",   "name_region"=>"Москва", "status_region"=>0],
            //      ["id_region"=>"RU-CHE",   "name_region"=>"Челябинская область", "status_region"=>0],   
            //      ["id_region"=>"RU-ORL",   "name_region"=>"Орловская область", "status_region"=>0], 
            //      ["id_region"=>"RU-OMS",   "name_region"=>"Омская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-LIP",   "name_region"=>"Липецкая область", "status_region"=>0],  
            //      ["id_region"=>"RU-KRS",   "name_region"=>"Курская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-RYA",   "name_region"=>"Рязанская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-BRY",   "name_region"=>"Брянская область", "status_region"=>0], 
            //      ["id_region"=>"RU-KIR",   "name_region"=>"Кировская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-ARK",   "name_region"=>"Архангельская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-MUR",   "name_region"=>"Мурманская область", "status_region"=>0],  
            //      ["id_region"=>"RU-SPE",   "name_region"=>"Санкт-Петербург",  "status_region"=>0], 
            //      ["id_region"=>"RU-YAR",   "name_region"=>"Ярославская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-ULY",   "name_region"=>"Ульяновская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-NVS",   "name_region"=>"Новосибирская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-TYU",   "name_region"=>"Тюменская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-SVE",   "name_region"=>"Свердловская область", "status_region"=>0],  
            //      ["id_region"=>"RU-NGR",   "name_region"=>"Новгородская область", "status_region"=>0],  
            //      ["id_region"=>"RU-KGN",   "name_region"=>"Курганская область", "status_region"=>0],  
            //      ["id_region"=>"RU-KGD",   "name_region"=>"Калининградская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-IVA",   "name_region"=>"Ивановская область", "status_region"=>0],  
            //      ["id_region"=>"RU-AST",   "name_region"=>"Астраханская область", "status_region"=>0],  
            //      ["id_region"=>"RU-KHA",   "name_region"=>"Хабаровский край", "status_region"=>0],  
            //      ["id_region"=>"RU-CE",    "name_region"=>"Чеченская республика",   "status_region"=>0], 
            //      ["id_region"=>"RU-UD",    "name_region"=>"Удмуртская республика",  "status_region"=>0],  
            //      ["id_region"=>"RU-SE",    "name_region"=>"Республика Северная Осетия",   "status_region"=>0], 
            //      ["id_region"=>"RU-MO",    "name_region"=>"Республика Мордовия",  "status_region"=>0],  
            //      ["id_region"=>"RU-KR",    "name_region"=>"Республика  Карелия",  "status_region"=>0],  
            //      ["id_region"=>"RU-KL",    "name_region"=>"Республика  Калмыкия",   "status_region"=>0], 
            //      ["id_region"=>"RU-IN",    "name_region"=>"Республика  Ингушетия",  "status_region"=>0],  
            //      ["id_region"=>"RU-AL",    "name_region"=>"Республика Алтай",   "status_region"=>0], 
            //      ["id_region"=>"RU-BA",    "name_region"=>"Республика Башкортостан",  "status_region"=>0],  
            //      ["id_region"=>"RU-AD",    "name_region"=>"Республика Адыгея",  "status_region"=>0],  
            //      ["id_region"=>"RU-CR",    "name_region"=>"Республика Крым",  "status_region"=>0],  
            //      ["id_region"=>"RU-SEV",   "name_region"=>"Севастополь",  "status_region"=>0], 
            //      ["id_region"=>"RU-KO",    "name_region"=>"Республика Коми",  "status_region"=>0],  
            //      ["id_region"=>"RU-PNZ",   "name_region"=>"Пензенская область", "status_region"=>0],  
            //      ["id_region"=>"RU-TAM",   "name_region"=>"Тамбовская область", "status_region"=>0],  
            //      ["id_region"=>"RU-LEN",   "name_region"=>"Ленинградская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-VLG",   "name_region"=>"Вологодская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-KOS",   "name_region"=>"Костромская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-PSK",   "name_region"=>"Псковская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-YAN",   "name_region"=>"Ямало-Ненецкий АО",  "status_region"=>0], 
            //      ["id_region"=>"RU-CHU",   "name_region"=>"Чукотский АО", "status_region"=>0],  
            //      ["id_region"=>"RU-YEV",   "name_region"=>"Еврейская автономская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-TY",    "name_region"=>"Республика Тыва",  "status_region"=>0],  
            //      ["id_region"=>"RU-SAK",   "name_region"=>"Сахалинская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-AMU",   "name_region"=>"Амурская область", "status_region"=>0],  
            //      ["id_region"=>"RU-BU",    "name_region"=>"Республика Бурятия",   "status_region"=>0], 
            //      ["id_region"=>"RU-KK",    "name_region"=>"Республика Хакасия",   "status_region"=>0], 
            //      ["id_region"=>"RU-KEM",   "name_region"=>"Кемеровская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-ALT",   "name_region"=>"Алтайский край", "status_region"=>0],  
            //      ["id_region"=>"RU-DA",    "name_region"=>"Республика Дагестан",  "status_region"=>0],  
            //      ["id_region"=>"RU-KB",    "name_region"=>"Кабардино-Балкарская республика",  "status_region"=>0],  
            //      ["id_region"=>"RU-KC",    "name_region"=>"Карачаевая-Черкесская республика",   "status_region"=>0], 
            //      ["id_region"=>"RU-KDA",   "name_region"=>"Краснодарский край", "status_region"=>0],  
            //      ["id_region"=>"RU-ROS",   "name_region"=>"Ростовская область", "status_region"=>0],  
            //      ["id_region"=>"RU-SAM",   "name_region"=>"Самарская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-TA",    "name_region"=>"Республика Татарстан",   "status_region"=>0], 
            //      ["id_region"=>"RU-ME",    "name_region"=>"Республика Марий Эл",  "status_region"=>0],  
            //      ["id_region"=>"RU-CU",    "name_region"=>"Чувашская республика",   "status_region"=>0], 
            //      ["id_region"=>"RU-NIZ",   "name_region"=>"Нижегородская край", "status_region"=>0],  
            //      ["id_region"=>"RU-VLA",   "name_region"=>"Владимировская область", "status_region"=>0],  
            //      ["id_region"=>"RU-MOS",   "name_region"=>"Московская область", "status_region"=>0],  
            //      ["id_region"=>"RU-KLU",   "name_region"=>"Калужская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-BEL",   "name_region"=>"Белгородская область", "status_region"=>0],  
            //      ["id_region"=>"RU-ZAB",   "name_region"=>"Забайкальский край", "status_region"=>0],  
            //      ["id_region"=>"RU-PRI",   "name_region"=>"Приморский край",  "status_region"=>0], 
            //      ["id_region"=>"RU-KAM",   "name_region"=>"Камачатский край", "status_region"=>0],  
            //      ["id_region"=>"RU-MAG",   "name_region"=>"Магаданская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-SA",    "name_region"=>"Республика Саха",  "status_region"=>0],  
            //      ["id_region"=>"RU-KYA",   "name_region"=>"Красноярский край",  "status_region"=>0], 
            //      ["id_region"=>"RU-ORE",   "name_region"=>"Оренбургская область", "status_region"=>0],  
            //      ["id_region"=>"RU-SAR",   "name_region"=>"Саратовская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-VGG",   "name_region"=>"Волгоградская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-VOR",   "name_region"=>"Ставропольский край",  "status_region"=>0], 
            //      ["id_region"=>"RU-SMO",   "name_region"=>"Смоленская область", "status_region"=>0],  
            //      ["id_region"=>"RU-TVE",   "name_region"=>"Тверская область", "status_region"=>0],  
            //      ["id_region"=>"RU-PER",   "name_region"=>"Пермская область", "status_region"=>0],  
            //      ["id_region"=>"RU-KHM",   "name_region"=>"Ханты-Мансийский АО",  "status_region"=>0], 
            //      ["id_region"=>"RU-KHM",   "name_region"=>"Ханты-Мансийский АО",  "status_region"=>0], 
            //      ["id_region"=>"RU-TOM",   "name_region"=>"Томская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-IRK",   "name_region"=>"Иркутская область",  "status_region"=>0], 
            //      ["id_region"=>"RU-NEN",   "name_region"=>"Ненецскй АО",  "status_region"=>0], 
            //      ["id_region"=>"RU-STA",   "name_region"=>"Ставропольский край",  "status_region"=>0], 
            //      ["id_region"=>"RU-TUL",   "name_region"=>"Тульская область", "status_region"=>0]));
                 


            
            return redirect()->route('admin');
        }

// Для завершения даминской сессии
        public function logout(Request $request){
            Auth::logout();
            return redirect('/');
        }

}// закрывает клас 






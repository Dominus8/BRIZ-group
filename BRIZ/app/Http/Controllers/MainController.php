<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use App\Models\SlideModel;
use App\Models\DirectionsCardModel;
use App\Models\ContactModel;
use App\Models\PresentationModel;
use Illuminate\Support\Facades\Storage;
use Auth;


class MainController extends Controller
{
// Главная страница
    public function home(){

        $slides= new SlideModel();
        $directions_card = new DirectionsCardModel();
        $contact = new ContactModel();
    
        return view('home',['slides'=>$slides->all()],['directions_card'=>$directions_card->all(),'contact'=>$contact->all()]);
    }
// Проброс данных в админку
    public function admin(){
        $slide = new SlideModel();
        $directions_card = new DirectionsCardModel();
        $contact = new ContactModel();
        $presentation = new PresentationModel();

        return view('admin',['slide'=>$slide->all(),'directions_card'=>$directions_card->all(),'contact'=>$contact->all(),'presentation'=>$presentation->all()]);
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
    public function update_slide($id, Request $request ){

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

        
        public function logout(Request $request) {
            Auth::logout();
            return redirect('/');
        }
 
}// закрывает клас 






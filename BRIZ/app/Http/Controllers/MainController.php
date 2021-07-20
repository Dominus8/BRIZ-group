<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideModel;
use App\Models\DirectionsCardModel;
use App\Models\ContactModel;


class MainController extends Controller
{
// Главная страница
    public function home(){

        $slides= new SlideModel();
        $directions_card = new DirectionsCardModel();
        $contact = new ContactModel();

        return view('home',['slides'=>$slides->all()],['directions_card'=>$directions_card->all(), 'contact'=>$contact->all()]);
    }
// Проброс данных в админку
    public function admin(){
        $slide = new SlideModel();
        $directions_card = new DirectionsCardModel();
        $contact = new ContactModel();

        return view('admin',['slide'=>$slide->all(),'directions_card'=>$directions_card->all(),'contact'=>$contact->all()]);
    }

// Роут для просмотра и загрузки презентаций
    public function download(){
        return view('download');
    }
// Для создания слайда
    public function create_slide(Request $request){
        $image = $request->file('slide_image')->store('storage', 'slider_image');
        $slide = new SlideModel();
        $slide->slide_image = $image;
        $slide->slide_title = $request->input('slide_title');
        $slide->slide_body = $request->input('slide_body');

        $slide->save();

        return redirect()->route('admin');
    }
// Для удаления слайда
    public function dell_slide($id){

        $slide = SlideModel::find($id)->delete();

        return redirect()->route('admin');

    }
//Создание карточки направления

    public function create_direction_card(Request $request){
        $image = $request->file('direction_card_image')->store('storage', 'directions_image');
        $directions_card = new DirectionsCardModel();
        $directions_card->directions_card_image = $image;
        $directions_card->directions_card_title = $request->input('direction_card_title');
        $directions_card->directions_card_link = $request->input('direction_card_link');

        $directions_card->save();

        return redirect()->route('admin');
    }

// Для удаления карточек направления
    public function dell_directions_card($id){

        $slide = DirectionsCardModel::find($id)->delete();

        return redirect()->route('admin');

    }
    
//Создание карточки кнтактов
    public function create_contact(Request $request){
        $image = $request->file('contact_image')->store('storage', 'contacts_image');
        $contact = new ContactModel();
        $contact->contact_image = $image;
        $contact->contact_body = $request->input('contact_body');
        $contact->contact_phone = $request->input('contact_phone');
        $contact->contact_mail = $request->input('contact_mail');

        $contact->save();

        return redirect()->route('admin');
}

// Для удаления карточек контактов
    public function dell_contact($id){

        $contact = ContactModel::find($id)->delete();

        return redirect()->route('admin');

    }

 
}// закрывает клас






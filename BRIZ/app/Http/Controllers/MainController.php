<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideModel;


class MainController extends Controller
{
// роут для домашней страницы 
    public function home(){

        $slides= new SlideModel();

        return view('home',['slides'=>$slides->all()]);
    }
// Роут для просмотра и загрузки презентаций
    public function download(){
        return view('download');
    }
// Роут для админ панели
    public function admin(){
        $slide = new SlideModel();
        return view('admin',['slide'=>$slide->all()]);
    }
// Для создания слайда
    public function create_slide(Request $request){
        $image = $request->file('slide_image')->store('slider_image', 'slider_image');
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
}

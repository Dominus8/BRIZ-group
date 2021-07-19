<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideModel;


class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function download(){
        return view('download');
    }

    public function admin(){
        return view('admin');
    }

    public function create_slide(Request $request){
        $slide = new SlideModel();
        $slide->slide_image = $request->input('slide_title');
        $slide->slide_title = $request->input('slide_title');
        $slide->slide_body = $request->input('slide_body');

        $slide->save();

        return redirect()->route('/admin');
    }
}

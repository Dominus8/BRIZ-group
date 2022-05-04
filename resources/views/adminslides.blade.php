@extends('adminbase')

@section('admintabs')
<div class="admin-section slider-admin">
        <div class="admin-section__title">
            <h2>Создать слайд</h2>
        </div>
        <div class="admin-section__form">
            <form action="/admin/create-slide" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 
                    <lable for="si" class="form-label"> <h6>Изображение слайда 535х387</h6>  </lable>
                    <input id="si" type="file" class="form-control" name='slide_image'> <br>
                    <lable for="st" class="form-label"> <h6>Заголовок слайта</h6>  </lable>
                    <input id="st" type="text" class="form-control" name='slide_title' placeholder="небольше 40 символов" > <br>
                    <lable for="sb" class="form-label"> <h6>Тескт слайда</h6> </lable>
                    <textarea id="sb" name="slide_body" cols="20" rows="5" class="form-control" placeholder="небольше 150 символов"></textarea> <br>
                    <button class="btn btn-primary" type="sucsess"> Создать слайд</button>
                </div>
            </form>        
        </div>
        <div class="admin-section__manage">
            <!--Список существующих слайдов-->
            @foreach($slide as $el)
                <div class="manage-element slide">
                    <img style="width:35px; height:35px" src="storage/slider_image/{{$el->slide_image}}" alt="alt">
                    <h6>{{$el->slide_title }}</h6>
                    <a class='btn btn-warning' href="/admin/edit-slide/{{$el->id}}">edit</a>
                    <a class='btn btn-danger' href="/admin/dell-slide/{{$el->id}}">x</a>
                </div>
            @endforeach        
        </div>
    </div>
@endsection
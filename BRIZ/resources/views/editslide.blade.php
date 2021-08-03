@extends('base')

@section('head-link')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('nav')
<ul>
    <li onclick="window.location.href='/';" style='padding-left:50px; padding-bottom:0;' >Главная</li>
    <li onclick="window.location.href='/logout';" style='padding-bottom:0;'>Выйти из админки</li>
</ul>  
@endsection

@section('nav-mobile')
    <ul>
        <li onclick="window.location.href='/';" >Главная</li>
        <li onclick="window.location.href='/logout';" >Выйти из админки</li>
    </ul>
@endsection

@section('main_content')




<div class="container admin-body">
@if($errors->any())

<div class="div alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

<!--Форма добавления слайдов-->

<div class="admin-section slider-admin">
        <div class="admin-section__title">
            <h2>Изменить слайд</h2>
        </div>
        <div class="admin-section__form">
            <form action="/admin/update-slide/{{$slide->id}}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 
                    <lable for="si" class="form-label" > <h6>Изображение слайда 535х387{{$slide->slide_image}}</h6></lable>
                    <input id="si" type="file" class="form-control" name='slide_image' value=''> <br>
                    <lable for="st" class="form-label"> <h6>Заголовок слайта</h6>  </lable>
                    <input id="st" type="text" class="form-control" name='slide_title' placeholder="небольше 40 символов" value='{{$slide->slide_title}}'> <br>
                    <lable for="sb" class="form-label"> <h6>Тескт слайда</h6> </lable>
                    <textarea id="sb" name="slide_body" cols="20" rows="5" class="form-control" placeholder="небольше 150 символов">{{$slide->slide_body}}</textarea> <br>
                    <button class="btn btn-primary" type="sucsess"> Обновить </button>
                </div>
            </form>        
        </div><br>

@endsection
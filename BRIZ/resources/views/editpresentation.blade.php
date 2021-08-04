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

<!--Форма добавления презентации-->
    <div class="admin-section__title">
         <h2>Загрузить презентацию</h2>
    </div>
    <div class="admin-section__form">
        <form action="/admin/update-presentation/{{$presentation->id}}" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <div class="form-group"> 
                <lable for="pi" class="form-label"> <h6>Изображение презентации</h6></lable>
                <input id="pi" type="file" class="form-control" name='presentation_image'><br>

                <lable for="pt" class="form-label"> <h6>Заголовок презентации</h6></lable>
                <input id="pt" type="text" class="form-control" name='presentation_title' value='{{$presentation->presentation_title}}'><br>

                <lable for="pb" class="form-label"> <h6>Описание презентации</h6></lable>
                <textarea id="pb"  class="form-control" name="presentation_subtitle">{{$presentation->presentation_subtitle}}</textarea><br>

                <lable for="pf" class="form-label"> <h6>Файл презентации</h6></lable>
                <input id="pf" type="file" class="form-control" name='presentation_file'><br>

                <button class="btn btn-primary" type="sucsess"> Загрузить презентацию</button>
            </div>
        </form>
    </div>
<br>

@endsection
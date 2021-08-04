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

<div class="admin-section__title">
    <h2>Создать карточку контакта</h2>
</div>
<div class="admin-section__form">
    <form action="/admin/update-contact/{{$contact->id}}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="form-group"> 
            <lable for="ci" class="form-label"> <h6>Изображение контакта</h6>  </lable>
            <input id="ci" type="file" class="form-control" name='contact_image'> <br>

            <lable for="cb" class="form-label"> <h6>Адрес контакта</h6>  </lable>
            <textarea id="cb" class="form-control" name='contact_body'>{{$contact->contact_body}}</textarea><br>

            <lable for="cp" class="form-label"> <h6>Телефон контакта</h6> </lable>
            <input id="cp"  class="form-control" name="contact_phone" value='{{$contact->contact_phone}}'><br>

            <lable for="cm" class="form-label"> <h6>почта контакта</h6> </lable>
            <input id="cm" type="email" class="form-control" name="contact_mail" value='{{$contact->contact_mail}}'><br>

            <button class="btn btn-primary" type="sucsess"> Обновить карточку контакта</button>
        </div>
    </form>
</div>
<br>

@endsection
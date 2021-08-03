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
    <h2>Создать карточку направления</h2>
</div>
    <div class="admin-section__form">
        <form action="/admin/update-direction-card/{{$dcard->id}}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 
                    <lable for="di" class="form-label"> <h6>Изображение карточки 190х190</h6>  </lable>
                    <input id="di" type="file" class="form-control" name='direction_card_image'> <br>
                    <lable for="dt" class="form-label"> <h6>Заголовок карточки</h6>  </lable>
                    <input id="dt"  class="form-control" name='direction_card_title' placeholder="небольше 40 символов" value='{{$dcard->directions_card_title}}' > <br>
                    <lable for="db" class="form-label"> <h6>Ссылка направления</h6> </lable>
                    <input id="db"  class="form-control" name="direction_card_link" placeholder="небольше 40 символов" value='{{$dcard->directions_card_link}}'></input> <br>
                    <button class="btn btn-primary" type="sucsess"> Обновить карточку направления</button>
                </div>
        </form>
    </div>
    <br>

@endsection
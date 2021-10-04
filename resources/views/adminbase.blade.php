@extends('base')

@section('head-link')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('nav')
<ul>
    <li onclick="window.location.href='/';">Главная</li>
    <li onclick="window.location.href='/logout';">Выйти из админки</li>
</ul>  
@endsection

@section('nav-mobile')
    <ul>
        <li onclick="window.location.href='/';" >Главная</li>
        <li onclick="window.location.href='/logout';" >Выйти из админки</li>
    </ul>
@endsection

@section('style')
    <style>
        .header .header-content{
            padding: 0;
        }
    </style>
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid" >
        <!-- <a class="navbar-brand" href="{{route('admin-slides');}}">Слайды</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="btn btn-primary" style="margin:0 10px 0 10px;" href="{{route('admin-slides');}}">Слайды</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" style="margin:0 10px 0 10px;" href="{{route('admin-cards');}}">Направления</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" style="margin:0 10px 0 10px;" href="{{route('admin-contacts');}}">Контакты</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" style="margin:0 10px 0 10px;" href="{{route('admin-presentation');}}">Перзентации</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" style="margin:0 10px 0 10px;" href="{{route('admin-map');}}">Карта</a>
            </li>
          </ul>
        </div>
    </div>
</nav>


@yield('admintabs')

<div class="container " style="padding-bottom:250px;" >
    <h3 style="padding-top:50px;"> ↑ Выберете элемент для управления ↑</h3>
</div>

@endsection
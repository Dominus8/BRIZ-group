@extends('base')

@section('nav')
<ul>
    <li></li>
        <li onclick="window.location.href='/';" >Главная</li>
    <li></li>
</ul>  
@endsection

@section('main_content')

<div class="container">
    <form action="" method="post">
        <input type="data" class="form-control"> <br>
        <input type="text" class="form-control"><br>
        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
        <button type="sucsess">кек</button>
    </form>
</div>


@endsection
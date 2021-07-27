@extends('base')

@section('nav')
<ul>
    <li></li>
        <li onclick="window.location.href='/';" >Главная</li>
    <li></li>
</ul>  
@endsection

@section('main_content')

<div id="el1" class="section-outor">
    <div class="section-inner">
        <div class="presentations">
            <div class="all_categories" style='margin-top:120px'>
            @foreach($presentation as $el)
            <div class="presentation-wrapper">
                <div class="presentation__image">
                    <img src="/storage/presentation_image/{{$el->presentation_image}}" alt="">
                </div>
                <div class="presentation__title">
                    {{$el->presentation_title}}
                </div>
                <div class="presentation__subtitle">
                    {{$el->presentation_subtitle}}
                </div>
                <div class="presentation__download">
                    <a href="/download/download-presentation/{{$el->id}}"><img style="height:50px; width:70px;" src="/image/ico-dwn.svg" alt=""></a>
                </div>
            </div>
            @endforeach
            </div>
    </div>
</div>


@endsection
@extends('base')

@section('nav')
<ul>
    <li></li>
        <li onclick="window.location.href='/';" >Главная</li>
    <li></li>
</ul>  
@endsection

@section('nav-mobile')
    <ul>
            <li></li>
            <li onclick="window.location.href='/';" >Главная</li>
            <li></li>
    </ul>
@endsection

@section('main_content')

<div class="section-outor presentations-bg">
    <div class="section-inner">
        <div class="presentations">
            <div class="presentations-title">
                Загрузка презентаций
            </div>
            
            <div class="all_categories">
                @foreach($presentation as $el)
                    <div class="presentation-item">
                        <div class="presentation-item__image">
                            <img src="/storage/presentation_image/{{$el->presentation_image}}" alt="">
                        </div>
                        @if(strlen($el->presentation_title) > 55)
                        <div style="font-size:12px; line-height: 15px;" class="presentation-item__title">
                            {{$el->presentation_title}}
                        </div>
                        @else
                        <div class="presentation-item__title">
                            {{$el->presentation_title}}
                        </div>
                        @endif
                        <div class="presentation-item__subtitle">
                            {{$el->presentation_subtitle}}
                        </div>

                        <div class="presentation-item__download">
                            <a href="/download/download-presentation/{{$el->id}}">
                                <!-- <img src="/image/ico-dwn.svg" alt=""> -->
                                <svg height="25" width="25" style="enable-background:new 0 0 124 132;" version="1.1" viewBox="0 0 124 132" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <style type="text/css">
                                    <![CDATA[
                                    	.st0{fill:#EF3E42;}
                                    	.st1{fill:#FFFFFF;}
                                    	.st2{fill:none;}
                                    	.st3{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
                                    ]]>
                                    </style>
                                    <defs/>
                                    <path d="M99.1,113.7c2.6,0,4.7-2.1,4.7-4.7V79.9h11.2v29.8c0,8.4-6.8,15.2-15.2,15.2H18.5c-8.4,0-15.2-6.8-15.2-15.2V79.9h11.2V109  
                                    c0,2.6,2.1,4.7,4.7,4.7H99.1L99.1,113.7z M37.1,17.7h43.9V57h16.8L59.1,94.8L20.4,57h16.8V17.7L37.1,17.7z" fill="#002A48"/>
                                    <rect class="st2" height="132" id="_x3C_Slice_x3E__100_" width="124"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
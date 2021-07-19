@extends('base')

@section('nav')
<ul>
    <li></li>
        <li onclick="window.location.href='/';" >Главная</li>
    <li></li>
</ul>  
@endsection

@section('main_content')

<div class="container admin-body">

<!--Форма добавления слайдов-->

    <div class="create-slide">
        <div class="create-slide__title">
            <h2>Создать слайд</h2> 
        </div>
        <div class="create-slide__body">
        <form action="/admin/create-slide" method="post" enctype="multipart/form-data" >
             {{ csrf_field() }}
            <div class="form-group"> 
                <lable for="si" class="form-label"> <h6>Изображение слайда 535х387</h6>  </lable>
                <input id="si" type="file" class="form-control" name='slide_image'> <br>
                <lable for="st" class="form-label"> <h6>Заголовок слайта</h6>  </lable>
                <input id="st" type="text" class="form-control" name='slide_title' > <br>
                <lable for="sb" class="form-label"> <h6>Тескт слайда</h6> </lable>
                <textarea id="sb" name="slide_body" cols="20" rows="5" class="form-control"></textarea> <br>
                <button class="btn btn-primary" type="sucsess"> Создать слайд</button>
            </div>
        </form>
        </div>
    </div>

<!--Список существующих слайдов-->

<div class="slides">
    

        @foreach($slide as $el)
            <div class="slide ">
                <h6>{{$el->slide_title }}</h6>
                <a class='btn btn-primary' href="/admin/dell_slide/{{$el->id}}">x</a>
            </div>
        @endforeach

    
</div>

</div>


@endsection
@extends('base')
@section('head-link')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('nav')
<ul>
    <li></li>
        <li onclick="window.location.href='/';" >Главная</li>
    <li></li>
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
                    <h6>{{$el->slide_title }}</h6>
                    <a class='btn btn-primary' href="/admin/dell-slide/{{$el->id}}">x</a>
                </div>
            @endforeach        
        </div>
    </div>

    <!--Форма добавления карточек направления-->

    <div class="admin-section directions-admin">
        <div class="admin-section__title">
            <h2>Создать карточку направления</h2>
        </div>
        <div class="admin-section__form">
        <form action="/admin/create-direction-card" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 
                    <lable for="di" class="form-label"> <h6>Изображение карточки 190х190</h6>  </lable>
                    <input id="di" type="file" class="form-control" name='direction_card_image'> <br>
                    <lable for="dt" class="form-label"> <h6>Заголовок карточки</h6>  </lable>
                    <input id="dt" type="text" class="form-control" name='direction_card_title' placeholder="небольше 40 символов" > <br>
                    <lable for="db" class="form-label"> <h6>Ссылка направления</h6> </lable>
                    <input id="db"  class="form-control" name="direction_card_link" placeholder="небольше 40 символов"></input> <br>
                    <button class="btn btn-primary" type="sucsess"> Создать карточку направления</button>
                </div>
            </form>
        </div>
        <div class="admin-section__manage">
                    <!--Список существующих карточек-->
            @foreach($directions_card as $el)
                <div class="manage-element directions_card">
                    <h6>{{$el->directions_card_title }}</h6>
                    <a class='btn btn-primary' href="/admin/dell-directions-card/{{$el->id}}">x</a>
                </div>
            @endforeach   
        </div>
    </div>

    <div class="admin-section contacts-admin">
        <div class="admin-section__title">
            <h2>Создать карточку контакта</h2>
        </div>
        <div class="admin-section__form">
        <form action="/admin/create-contact" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 
                    <lable for="ci" class="form-label"> <h6>Изображение контакта</h6>  </lable>
                    <input id="ci" type="file" class="form-control" name='contact_image'> <br>

                    <lable for="cb" class="form-label"> <h6>Адрес контакта</h6>  </lable>
                    <input id="cb" type="text" class="form-control" name='contact_body' > <br>

                    <lable for="cp" class="form-label"> <h6>Телефон контакта</h6> </lable>
                    <input id="cp"  class="form-control" name="contact_phone"></textarea> <br>

                    <lable for="cm" class="form-label"> <h6>почта контакта</h6> </lable>
                    <input id="cm"  class="form-control" name="contact_mail"></textarea> <br>

                    <button class="btn btn-primary" type="sucsess"> Создать карточку контакта</button>
                </div>
            </form>
        </div>
        <div class="admin-section__manage">
            <!--Список существующих карточек-->
            @foreach($contact as $el)
                <div class="manage-element directions_card">
                    <h6>{{$el->contact_body}}</h6>
                    <a class='btn btn-primary' href="/admin/dell-contact/{{$el->id}}">x</a>
                </div>
            @endforeach 
        </div>
    </div>

        <!--Форма добавления презентации-->

        <div class="admin-section presentation-admin">
        <div class="admin-section__title">
            <h2>Загрузить презентацию</h2>
        </div>
        <div class="admin-section__form">
        <form action="/admin/create-presentation" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 
                    <lable for="pi" class="form-label"> <h6>Изображение презентации</h6>  </lable>
                    <input id="pi" type="file" class="form-control" name='presentation_image'> <br>
                    <lable for="pt" class="form-label"> <h6>Заголовок презентации</h6>  </lable>
                    <input id="pt" type="text" class="form-control" name='presentation_title' > <br>
                    <lable for="pb" class="form-label"> <h6>Описание презентации</h6> </lable>
                    <input id="pb"  class="form-control" name="presentation_subtitle"></textarea> <br>
                    <lable for="pf" class="form-label"> <h6>Файл презентации</h6>  </lable>
                    <input id="pf" type="file" class="form-control" name='presentation_file'> <br>
                    <button class="btn btn-primary" type="sucsess"> Загрузить презентацию</button>
                </div>
            </form>
        </div>
        <div class="admin-section__manage">
                    <!--Список существующих презентаций-->
            @foreach($presentation as $el)
                <div class="manage-element directions_card">
                    <h6>{{$el->presentation_title}}</h6>
                    <a class='btn btn-primary' href="/admin/dell-presentation/{{$el->id}}">x</a>
                </div>
            @endforeach 
        </div>
    </div>



</div>


@endsection
@extends('adminbase')

@section('admintabs')
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
                    <a class='btn btn-warning' href="/admin/edit-directions-card/{{$el->id}}">edit</a>
                    <a class='btn btn-danger' href="/admin/dell-directions-card/{{$el->id}}">x</a>
                </div>
            @endforeach   
        </div>
    </div>
@endsection
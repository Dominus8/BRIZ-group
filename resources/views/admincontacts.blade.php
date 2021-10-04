@extends('adminbase')

@section('admintabs')
    <!--Форма добавления карточек контактов-->
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
                    <textarea id="cb" type="text" class="form-control" name='contact_body' ></textarea> <br>

                    <lable for="cp" class="form-label"> <h6>Телефон контакта</h6> </lable>
                    <input id="cp"  class="form-control" name="contact_phone"> <br>

                    <lable for="cm" class="form-label"> <h6>почта контакта</h6> </lable>
                    <input id="cm" type="email"  class="form-control" name="contact_mail"> <br>

                    <button class="btn btn-primary" type="sucsess"> Создать карточку контакта</button>
                </div>
            </form>
        </div>
        <div class="admin-section__manage">
            <!--Список существующих карточек-->
            @foreach($contact as $el)
                <div class="manage-element directions_card">
                    <h6>{{$el->contact_body}}</h6>
                    <a class='btn btn-warning' href="/admin/edit-contact/{{$el->id}}">edit</a>
                    <a class='btn btn-danger' href="/admin/dell-contact/{{$el->id}}">x</a>
                </div>
            @endforeach 
        </div>
    </div>
@endsection
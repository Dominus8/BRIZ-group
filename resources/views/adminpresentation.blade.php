@extends('adminbase')

@section('admintabs')
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
                        <a class='btn btn-warning' href="/admin/edit-presentation/{{$el->id}}">edit</a>
                        <a class='btn btn-danger' href="/admin/dell-presentation/{{$el->id}}">x</a>
                    </div>
                @endforeach 
            </div>
        </div>
@endsection
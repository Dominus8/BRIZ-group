@extends('adminbase')

@section('admintabs')
    <!--Форма обновления карты-->
    <div class="admin-section presentation-admin">
            <div class="admin-section__title">
                 <h2>Управление картой</h2>
            </div>
                <div class="admin-section__form">
                    <div class="row" >
                        <div class="col-md-12">
                            <form class='mh-100' action="/admin/update-map" method="post" enctype="multipart/form-data"> 
                                {{ csrf_field() }}
                                <div class="form-group" style=' height:800px; max-wight:1100px; display:flex; flex-direction:column; flex-wrap:wrap; overflow:scroll; '> 
                                    @foreach($map as $el)
                                           <div style='max-width:250px; margin:0 10px; '> <p>{{$el->name_region}} @if($el->status_region)<input type="checkbox" id="scales" name="{{$el->id_region}}" checked> @else<input type="checkbox" id="scales"  name="{{$el->id_region}}" >@endif</div>
                                    @endforeach
                                    <br>
                                </div>
                                <div style='margin-top:40px;'>
                                    <button class="btn btn-primary" type="sucsess"> Изменить регионы</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
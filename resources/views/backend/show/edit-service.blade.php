@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">Modifie le video :</h4>
                </div>
            </div>
        </div>
    </div>

    <form action="/edit-service/{{$service->id}}" enctype="multipart/form-data" method="post">
        @csrf
    <div class="service">
        <select class="form-control" name="logo">
            @foreach ($services as $item)
                
            <option value="{{$item->logo}}">{{$item->logo}}</option>
            @endforeach
        </select>
        <div class="service-text">
            <div class="form-group col-md-12">
                <label for="inputCity">titre</label>
                <input type="text" value="{{$service->tire}}" class="form-control" id="inputCity" name="titre">
            </div>
            <div class="form-group col-md-12">
                <label for="inputCity">text</label>
                <input type="text" value="{{$service->text}}" class="form-control" id="inputCity" name="text">
            </div>
            <div class="container">

                <div class="row">
               
                    <button type="submit" class="btn btn-primary">Modifier</button>    

           
                </div>
            </div>
        </div>
    </div>


</form> 



      
@stop

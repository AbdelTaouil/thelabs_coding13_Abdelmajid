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
                    <h4 class="mb-0">Modification :</h4>
                </div>
            </div>
        </div>
    </div>



    <form action="/edit-team/{{$team->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <div class="container mt-5">
        <div class="form-row">
            <div class="form-group col-md-6">
            <img width="200px" src="{{asset("img/$team->src")}}" alt=""><!-- Logo -->

        </div>

            <div class="form-group col-md-6">
                <label for="imagee">Votre photo</label>
                <input type="file" value="{{$team->src}}" name="src" id="imagee">
                <input type="text" value="{{$team->nom}}" class="form-control" id="inputCity" name="nom">
                <select class="form-control col-md-6" name="emploie_id">

                    @foreach ($emploie as $item)
                        <option value="{{$item->id}}">{{$item->function}}</option>
                    @endforeach
                    
                </select>

                <button type="submit" class="btn btn-primary">Modifier</button>            

            </div>
        </div>
       
        </div>
          
           

    </form>

      
@stop

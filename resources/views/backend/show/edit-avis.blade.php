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



    <form action="/edit-avis/{{$avis->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <div class="container mt-5">

            <div class="form-group col-md-6">
                <label for="inputCity">Avis :</label>

                <input type="text" value="{{$avis->text}}" class="form-control" id="inputCity" name="text">

                <label for="inputCity">Personne qui note :</label>
                <select class="form-control" name="team_id">
                @foreach ($team as $item)
                <option value="{{$item->id}}">{{$item->nom}}</option>
                @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Modifier</button>            

            </div>
        </div>
       
        </div>
          
           

    </form>

      
@stop

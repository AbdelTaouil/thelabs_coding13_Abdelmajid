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
                    <h4 class="mb-0">Modifie</h4>
                </div>
            </div>
        </div>
    </div>



    <form action="/edit-titre/{{$titre->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <div class="container mt-5">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputCity">Titre</label>
                <input type="text" value="{{$titre->titre}}" class="form-control" id="inputCity" name="titre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Sous-titre</label>
                @if ($titre->soustitre=="")
                    
                @else
                <input type="text" value="{{$titre->soustitre}}" class="form-control" id="inputCity" name="soustitre">
                @endif  
               
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Sous-titre</label>
                @if ($titre->soustitres=="")
                    
                @else
                <input type="text" value="{{$titre->soustitres}}" class="form-control" id="inputCity" name="soustitres">
                @endif            
            </div>
        </div>
    
    <button type="submit" class="btn btn-primary">Modifier</button>

      </form>
@stop

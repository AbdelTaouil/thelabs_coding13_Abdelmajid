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



    <form action="/edit-footer/{{$footer->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <div class="container mt-5">
            <h2>Footer :</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Text footer :</label>
                <input type="text" value="{{$footer->text}}" class="form-control" id="inputCity" name="text">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Mot en couleur footer :</label>
                <input type="text" value="{{$footer->motcouleur}}" class="form-control" id="inputCity" name="motcouleur">
            </div>
        </div>
        <h2>contact :</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Adresse : </label>
                <input type="text" value="{{$footer->adresse}}" class="form-control" id="inputCity" name="titre">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Code postal</label>
                <input type="text" value="{{$footer->codepostal}}" class="form-control" id="inputCity" name="titre">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Numeros : </label>
                <input type="text" value="{{$footer->numeros}}" class="form-control" id="inputCity" name="titre">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Email :</label>
                <input type="text" value="{{$footer->email}}" class="form-control" id="inputCity" name="titre">
            </div>
        </div>
    
    <button type="submit" class="btn btn-primary">Modifier</button>

      </form>
@stop

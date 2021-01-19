@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit</h1>

    <form action="/edit-profil/{{$user->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <h1 class="titre2 text-dark">Modification le contenu</h1>

        <div class="container mt-5">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Nom</label>
                <input type="text" value="{{$user->nom}}" class="form-control" id="inputCity" name="name">
            </div>
            <div class="form-group col-md-6"> 
                <label for="inputCity">Email</label> 
                <input type="text" value="{{$user->email}}" class="form-control" id="inputCity" name="email"> 
            </div>
            @if ($user->role_id==1)
            <div class="form-group col-md-6">
                <label for="inputCity">Role</label>
                <input type="text" value="{{$user->roles->role}}" class="form-control" id="inputCity" name="metier">
            </div>
            @endif

            <div class="form-group mx-5 pt-4">
              <label for="imagee">Votre photo</label>
              <input type="file" value="{{$user->image}}" name="image" id="imagee">
            </div>
          </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Modifier</button>

      </form>

      @stop

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
                    <h4 class="mb-0">Modifie le logo :</h4>
                </div>
            </div>
        </div>
    </div>



    <form action="/edit-logo/1" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <div class="container mt-5">
        <div class="form-row">

            <img src="{{asset("img/logoGrand.jpg")}}" alt=""><!-- Logo -->

            <div class="form-group mx-5 pt-4">
                <label for="imagee">Votre photo</label>
                <input type="file" value="{{$logo->logo}}" name="logo" id="imagee">
              </div>
        </div>
    <button type="submit" class="btn btn-primary m-5">Modifier</button>
      </form>

      
@stop

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
                    <h4 class="mb-0">Email :</h4>
                </div>
            </div>
        </div>
    </div>



    <form enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
       
        <div class="container mt-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h5>Message envoyer de :</h5>
                    <label for="inputCity">  {{$mail->email}}</label>
                </div>
            </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <h5>Nom :</h5>
                    <label for="inputCity">{{$mail->nom}}</label>
                </div>
                <div class="form-group col-md-6">
                    <h5>Sujet :</h5>
                    <label for="inputCity">{{$mail->sujet}}</label>
                </div>
                <div class="form-group col-md-12">
                    <h5>Message :</h5>
                    <textarea class="form-control" rows="3" placeholder="">{{$mail->message}}</textarea>
                </div>
                

        </div>
           
    </div>

    </form>

      
@stop

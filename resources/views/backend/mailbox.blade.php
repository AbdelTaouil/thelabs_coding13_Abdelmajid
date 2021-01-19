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
                    <h4 class="mb-0">Mailbox :</h4>
                </div>
            </div>
        </div>
    </div>



    <table class="table container">
        <thead class="m-5">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">email</th>
            <th scope="col">Sujet</th>
            <th scope="col">Voir</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mail as $item)
        <tr>
          <th scope="row">{{$counter++}}</th>
          <td>{{$item->nom}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->sujet}}</td>
          <td>
          <div class="row">
          <a href="/voir-mail/{{$item->id}}">
              
              <button class="btn btn-success "><i class="far fa-eye"></i></button>
          </a>
        </div>
      </td>
        </tr>
      
      </tbody>
          @endforeach
      </table>

@stop



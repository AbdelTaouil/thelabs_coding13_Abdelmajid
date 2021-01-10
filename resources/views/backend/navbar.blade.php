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
                    <h4 class="mb-0">Modifier la navbar :</h4>
                </div>
            </div>
        </div>
    </div>



    <table class="table container">
        <thead class="m-5">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($navbar as $item)
        <tr>
          <th scope="row">{{$counter++}}</th>
          <td>{{$item->titre}}</td>
          <td>
          <div class="row">
          <a href="/modifier-nav/{{$item->id}}">
              
              <button class="btn btn-success "><i class="fas fa-edit"></i></button>
          </a>
        </div>
      </td>
        </tr>
      
      </tbody>
          @endforeach
      </table>

@stop



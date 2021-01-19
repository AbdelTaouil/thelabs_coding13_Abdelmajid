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
                    <h4 class="mb-0"> Newsletter :</h4>
                </div>
            </div>
        </div>
    </div>



    <table class="table container">
        <thead class="m-5">
          <tr>
            <th scope="col">#</th>
            <th scope="col">email</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($newsletter as $item)
        <tr>
          <th scope="row">{{$counter++}}</th>
         
          <td>{{$item->email}}</td>
          <td>
          <div class="row">
            <form action="/supprimer-news/{{$item->id}}" method="post">
                @csrf
                <button class="btn btn-danger m-1"><i class="far fa-trash-alt"></i></button>
              </form>
        </div>
      </td>
        </tr>
      
      </tbody>
          @endforeach
      </table>

@stop



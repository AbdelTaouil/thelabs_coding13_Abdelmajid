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
                    <h4 class="mb-0">Modifier les titres et les sous-titres :</h4>
                </div>
            </div>
        </div>
    </div>



    <table class="table container">
        <thead class="m-5">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Sous-titre</th>
            <th scope="col">Sous-titres</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($titre as $item)
        <tr>
          <th scope="row">{{$counter++}}</th>
          <td>{{$item->titre}}</td>
          @if ($item->soustitre=="")
            <td></td>
          @else
          <td><textarea class="form-control" name="soustitre" id="exampleFormControlTextarea1" rows="3">{{$item->soustitre}}</textarea></td>
          @endif  
          @if ($item->soustitres=="")
          <td></td>
          @else
          <td><textarea class="form-control" name="soustitre" id="exampleFormControlTextarea1" rows="3">{{$item->soustitres}}</textarea></td>
          @endif  

          
          <td>
          <div class="row">
          <a href="/modifier-titre/{{$item->id}}">
              
              <button class="btn btn-success "><i class="fas fa-edit"></i></button>
          </a>
        </div>
      </td>
        </tr>
      
      </tbody>
          @endforeach
      </table>


      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0"> Modifier le button :</h4>
                </div>
            </div>
        </div>
    </div>



    <table class="table container">
        <thead class="m-5">
          <tr>
            <th scope="col">button</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($button as $item)
        <tr>
          <td><button class="btn btn-primary ">{{$item->button}}</button></td>
          <td>
          <div class="row">
          <a href="/modifier-button/{{$item->id}}">
              
              <button class="btn btn-success "><i class="fas fa-edit"></i></button>
          </a>
        </div>
      </td>
        </tr>
      
      </tbody>
          @endforeach
      </table>

@stop



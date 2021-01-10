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
                    <h4 class="mb-0">Modifie les services :</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crée un service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-md-12 col-sm-6">
                <form action="/store-service" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="service">
                    <select class="form-control" name="logo">
                        @foreach ($service as $item)
                            
                        <option value="{{$item->logo}}">{{$item->logo}}</option>
                        @endforeach
                    </select>
                    <div class="service-text">
                        <div class="form-group col-md-12">
                            <label for="inputCity">titre</label>
                            <input type="text" value="" class="form-control" id="inputCity" name="titre">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputCity">text</label>
                            <input type="text" value="" class="form-control" id="inputCity" name="text">
                        </div>
                        <div class="container">

                            <div class="row">
                           
                               
    
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-plus-square"></i></button>
        </div>
    </form> 
      </div>
    </div>
  </div>


  


    <div class="container">
        <div class="row">
        <!-- single service -->
        @foreach ($service as $item)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon" >
                        <i class="{{$item->logo}}" style="font-size: 50px" ></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->text}}</p>
                        <div class="row">
                        <a href="/modifier-service/{{$item->id}}">
                  
                            <button class="btn btn-success m-1"><i class="fas fa-edit"></i></button>
                        </a>
            
                        <form action="/supprimer-service/{{$item->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger m-1"><i class="far fa-trash-alt"></i></button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
                
        @endforeach
       
        </div>
    </div>


      
@stop

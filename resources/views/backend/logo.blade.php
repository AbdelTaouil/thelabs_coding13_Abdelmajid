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
                    <h4 class="mb-0">Le logo et la video:</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-6">
        <div class="container">
            <h4>Logo :</h4>
            <div class="row m-0">

                <img src="{{asset("img/logoGrand.jpg")}}" alt=""><!-- Logo -->

                <a href="/modifier-logo/1">
                    <button class="btn btn-primary m-5"><i class="fas fa-edit"></i></button>
                </a>

            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="container">
            <h4>Video :</h4>
            <div class="row m-0">
                @foreach ($video as $item)
                    
                <img style="width: 22rem;" src="{{asset("img/$item->image")}}" alt=""><!-- Logo -->
    
                <a href="/modifier-video/1">
                    <button class="btn btn-primary m-5"><i class="fas fa-edit"></i></button>
                </a>
                @endforeach
    
            </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">La carousel :</h4>
                </div>
            </div>
        </div>
    </div>


    <div class="row m-5">
    @foreach ($image as $item) 
    <div class="card m-3" style="width: 18rem;">
        <img src="img/{{$item->image}}
        " class="card-img-top" alt="...">
        <div class="card-body">

            <div class="row">

                <a href="/modifier-carousel/{{$item->id}}">
                  
                    <button class="btn btn-success m-1"><i class="fas fa-edit"></i></button>
                </a>
    
                <form action="/supprimer-carousel/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger m-1"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
      </div>
    @endforeach
    <div class="card m-3" style="width: 18rem;">
      
        <div class="card-body">





      <form action="/create-carousel" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf

            <div class="container text-light">
              <input type="file" name="image" id="imagee">
            </div>
   
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-square"></i></button>

      </form>       
        </div>
      </div>
</div>




@stop



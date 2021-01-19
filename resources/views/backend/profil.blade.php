@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-5 text-dark">Votre profil</h1>

<div class="container">
        <div class="row">
         
            
            <div class="col-lg-4">
              <img src="{{asset('img/' . Auth::user()->image)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
              <h3>Web Developer.</h3>
              <p class="font-italic">
                Toute vos informations sont ci-dessus.
              </p>
              <div class="row">
                <div class="col-lg-12">
                  <ul>
                  
                    <li><i class="icofont-rounded-right"></i> <strong>Nom :</strong> {{Auth::user()->name}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Email :</strong> {{Auth::user()->email}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Status :</strong> {{Auth::user()->roles->role}}</li>
                  
                  </ul>
                </div>
              </div>

              {{-- <a href="/modifier-user/{{Auth::user()->id}}">
                <button class="btn btn-success mx-4">Edit</button>
            </a> --}}
            </div>
          </div>
  </div>
  @if (Auth::user()->role_id==1  || Auth::user()->role_id==2 )
          <!-- Post item --> 

          <h1 class="m-5">Article a valider :</h1>
          
          <div class="container">
          <div class="row">
          @foreach ($article as $item)
          @if ($item->check=="non")
                    
                <div class="post-item m-3">
                  
                    <div class="card" style="width: 18rem;">
                      <img src="img/{{$item->src}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{$item->titre}}</h5>
                        <p class="card-text"> {{Str::limit($item->description, 200, ' ...') }} </p>
                        
                        {{-- <a href="/send-email/{{$item->id}}" class="btn btn-primary m-1"><i class="fas fa-edit"></i></a> --}}
                        <form action="/send-article/{{$item->id}}" method="post">
                          @csrf
                          <input type="text" value="oui" class="form-control d-none" id="inputCity" name="check">
                          <button class="btn btn-danger m-1"><i class="far fa-trash-alt"></i></button>
                        </form>
                      </div>
                    </div>
                </div>
                @endif
            @endforeach
          </div>
        </div>

          @endif
          
          <h1 class="m-5">Modifie ton article :</h1>
          
          <div class="container">
            <div class="row">
              
              @foreach ($article as $item)
              @can('AdminWebmaster', $item)
      

            <div class="post-item m-3">
  
              
                <div class="card" style="width: 18rem;">
                  <img src="img/{{$item->src}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$item->titre}}</h5>
                    <p class="card-text"> {{Str::limit($item->description, 200, ' ...') }} </p>
                    <div class="row">
                      <a href="/valider/{{$item->id}}" class="btn btn-primary m-1"><i class="fas fa-edit"></i></a>
                      <form action="/supprimer-article/{{$item->id}}" method="post">
                        @csrf
                        <button class="btn btn-danger m-1"><i class="far fa-trash-alt"></i></button>
                      </form>
                    </div>
      
                  </div>
                </div>
            </div>
            @endcan
            @endforeach
          </div>
      </div>
    </div>


@stop

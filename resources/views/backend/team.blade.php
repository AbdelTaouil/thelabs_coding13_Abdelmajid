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
                    <h4 class="mb-0">Modifier ou rajouter la team :</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="owl-carousel" id="testimonial-slide">
     
        <div class="container">
            <div class="row">
                <div class="card m-3" style="width: 18rem;">
      
                    <form action="/store-team" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4  rounded" method="post">
                        @csrf
                    <div class="card-body">
            
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Nom</label>
                                <input type="text" value="" class="form-control" id="inputCity" name="nom">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="inputCity">Emploie</label>

                            <select class="form-control" name="emploie_id">
                                @foreach ($emploie as $item)
                                    
                                <option value="{{$item->id}}">{{$item->function}}</option>
                                @endforeach
                            </select>
                        </div>

            
                        <div class="container text-light mt-3">
                          <input type="file" name="src" id="imagee">
                        </div>
               
                    <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-plus-square"></i></button>
                    
                </div>
                  </form>       
                  </div>

                @foreach ($team as $item)
        
                <div class="card p-2 m-3" style="width: 18rem;">
                    <img src="img/{{$item->src}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->nom}}</h5>
                      <p class="card-text">{{$item->emploie->function}}</p>
                      <div class="row">
                        <a href="/modifier-team/{{$item->id}}">
              
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                        </a>
                      <form action="/supprimer-team/{{$item->id}}" method="post">
                        @csrf
                        <button class="btn btn-danger m-1"><i class="far fa-trash-alt"></i></button>
                      </form>
                    </div>
                    </div>
                </div>

                @endforeach

                
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">Modifier ou rajouter les avis :</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">

        <form action="/store-avis" enctype="multipart/form-data" method="post">
            @csrf
        <div class="card mb-6 " style="max-width: 540px;">
            <div class="row no-gutters m-4">
                <div class="form-group col-md-4">
                </div>
              <div class="col-md-12">
                <div class="card-body">
                    <label for="inputCity">Personne qui note :</label>
                    <select class="form-control" name="team_id">
                    @foreach ($team as $item)
                    <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach
                </select>
                <div class="form-row">


                    <div class="form-group col-md-12">
                        <label for="inputCity">Notez votre avis :</label>
                        <input type="text" value="" class="form-control" id="inputCity" name="text">
                    </div>
                </div>
         
                <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-plus-square"></i></button>

                </div>
              </div>
            </div>
          </div>
        </form> 


    @foreach ($avis as $item)

    <div class="card mb-3 m-2" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/{{$item->team->src}}" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$item->team->nom}} </h5>
              <p class="card-text"><strong>{{$item->team->emploie->function}}</strong><p>
              <p class="card-text"><strong>''</strong>{{$item->text}}<strong>''</strong></p>
              <div class="row">
                <a href="/modifier-avis/{{$item->id}}">
      
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                </a>
              <form action="/supprimer-avis/{{$item->id}}" method="post">
                @csrf
                <button class="btn btn-danger m-1"><i class="far fa-trash-alt"></i></button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>

    @endforeach
</div>
</div>
@stop



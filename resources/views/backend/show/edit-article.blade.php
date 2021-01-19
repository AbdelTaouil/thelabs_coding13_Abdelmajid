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
                    <h4 class="mb-0">Modification :</h4>
                </div>
            </div>
        </div>
    </div>



    <form action="/edit-article/{{$article->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
       
        <div class="container mt-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Titre</label>
                    <input type="text" value="{{$article->titre}}" class="form-control" id="inputCity" name="titre">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputCity">description:</label>
                    <textarea class="form-control" rows="3" placeholder="{{$article->description}}" name="description"></textarea>
                </div>
                @if (Auth::user()->role_id==1 || Auth::user()->role_id==2)
                <select class="form-control col-md-6" name="check">

                        <option>non</option>
                        <option>oui</option>

                </select>
                @else
                <input type="text" value="{{$article->check}}" class="form-control d-none" id="inputCity" name="check">

                @endif
    
                <div class="form-group mx-5 pt-4">
                  <label for="imagee">Votre photo</label>
                  <input type="file" value="{{$article->src}}" name="src" id="image">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group m-3">
                  <label>Select Multiple</label>
                    <select multiple="" class="form-control" name="cats[]">
                            @foreach ($tag as $item)

                                <option value="{{$item->id}}"  {{ in_array($item->id, old('cats') ?: []) ? 'selected' : '' }}>{{$item->tag}}</option>

                            @endforeach
                    </select>
                </div>
                
                <div class="form-group m-3">
                  <label>Select Multiple</label>
                  <select multiple="" class="form-control" name="cat[]">
                @foreach ($categorie as $item)

                                  <option value="{{$item->id}}"  {{ in_array($item->id, old('cats') ?: []) ? 'selected' : '' }}>{{$item->categorie}}</option>
                                 
                                  @endforeach
                                </select>
                              </div>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>            

        </div>
           

    </form>

      
@stop

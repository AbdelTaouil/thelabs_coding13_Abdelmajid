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
                    <h4 class="mb-0">Crée un article :</h4>
                </div>
            </div>
        </div>
    </div>



    <form action="/store-article" enctype="multipart/form-data" method="post">
        @csrf

          <div class="col-md-12">
            <div class="card-body">
            
            <div class="form-row">


                <div class="form-group col-md-12 mt-3">
                    <label for="inputCity">titre:</label>
                    <input type="text" value="" class="form-control" id="inputCity" name="titre">
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="inputCity">description:</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <div class="container">
                        <input type="file" name="src" id="imagee">
                    </div>
                </div>
                <div class="form-group col-md-6 d-none">
                    <label for="inputCity">src:</label>
                    <input type="text" value="non" class="form-control" id="inputCity" name="check">
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
          
            <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-plus-square"></i></button>

            </div>
          </div>

    </form> 




@stop



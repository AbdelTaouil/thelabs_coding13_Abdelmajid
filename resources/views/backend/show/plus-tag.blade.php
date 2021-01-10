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
                    <h4 class="mb-0">Modifie</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-md-12">
        <form action="/attach/1" method="post">
            @csrf
        @foreach ($tag as $item)
        <tr>
            <td>
           
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" name="tags_id" type="checkbox" id="inlineCheckbox1" value="{{$item->id}}">
                        <label class="form-check-label" for="inlineCheckbox1">{{$item->tag}}</label>
                      </div>
                    </td>
                </tr> 
                @endforeach
                <button type="submit" class="btn btn-success">s'abonner</button>
            </form>   
    </div>
    
@stop

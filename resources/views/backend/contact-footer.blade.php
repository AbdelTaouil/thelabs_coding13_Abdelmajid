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
                    <h4 class="mb-0">Modifier le contact et le footer:</h4>
                </div>
            </div>
        </div>
    </div>


<div class="container mt-5">
    @foreach ($footer as $item)
		<h2 class="mb-3">Footer : </h2>
	<footer class="footer-section">
		<h4>{{$item->text}} <a href="https://colorlib.com" target="_blank">{{$item->motcouleur}}</a></h4>
    </footer>
    <h2 class="mt-3">Contact : </h2>
    <p class="con-item">{{$item->adresse}}<br> {{$item->codepostal}}</p>
    <p class="con-item">{{$item->numeros}}</p>
    <p class="con-item">{{$item->email}}</p>
    
    <a href="/modifier-footer/{{$item->id}}">
        
        <button class="btn btn-success "><i class="fas fa-edit"></i></button>
    </a>
    @endforeach
</div>





@stop



<!-- <h1><?= $titulo ?></h1> -->

@extends('layouts.layout')
@section('titulo')
<h1>{{$titulo}}</h1>
@endsection
@section('content')
<p>Descripcion de la empresa</p>
<ul>
    @forelse($servicios as $servicio)
    <!-- <li>Servicio de {{$servicio}} </li> -->
    @include("site.detalleServicio")
    @empty
    <h4>No hay servicios disponibles</h4>
    @endforelse
</ul>
@endsection


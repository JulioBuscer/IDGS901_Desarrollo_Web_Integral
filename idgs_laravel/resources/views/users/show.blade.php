@extends('layouts.layout')

@section('titulo')
<h2>Detalle de usuario</h2>
@endsection

@section('content')
<a href="{{route('users.index')}}">Regresar</a> <br>

<table>
    <tr>
        <td>Nombre:</td>
        <td>{{$modelo->name}}</td>
    </tr>
    <tr>
        <td>Correo:</td>
        <td>{{$modelo->email}}</td>
    </tr>
</table>
@endsection
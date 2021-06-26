@extends('layouts.layout')

@section('titulo')
<h2>Lista de usuarios</h2>
@endsection
@section('content')
<a href="{{route('users.create')}}">Registrar Nuevo</a>

@if(Session::has('message'))
<br>{{Session::get('message')}} <br>
@endif
<div class="table-responsive " style="overflow-x:auto;">
    <table class="table table-dark" >
        <tr>
            <th></th>
            <th>ID</th>
            <th>Nombre de Usuario</th>
            <th>Correo Usuario</th>
        </tr>
        @forelse($table as $row)
        <tr>
            <th>
                <a href="{{route('users.show',$row->id)}}"><button>👁‍🗨 Ver detalle</button></a><br>
                <a href="{{route('users.edit',$row->id)}}"><button>✍ Editar</button></a>
                {{Form::open(["url"=>route('users.destroy',$row->id)])}}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('🚮 Borrar')}}
                {{Form::close()}}
            </th>
            <th>{{$row->id}}</th>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="2">No hay usuarios registrados</td>
        </tr>
        @endforelse

    </table>
</div>
@endsection
@extends('layouts.layout')
@section('titulo')
Inicio de sesión
@endsection
@section('content')
{{HTML::ul($errors->all())}}
{{Form::open(["url"=>"/login"])}}
<div class="form-group">
    {{Form::label('email','Correo')}}
    {{Form::text('email', Request::old('email'),
["class"=>"form-control text-light", "required" => true ] ) }}
</div>
<div class="form-group">
    {{Form::label('password','Contraseña')}}
    {{Form::password('password', ["class"=>"form-control full-width text-light", "required" => true ] )}}
</div>
{{Form::submit('Iniciarsesión',["class"=>"btn btn-primary"] )}}
{{Form::close()}}
@endsection
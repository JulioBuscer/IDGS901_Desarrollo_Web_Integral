@extends('layouts.layout')

@section('titulo')
<h2>Edición de usuarios</h2>
@endsection 

@section('content')

{{HTML::ul($errors->all())}}

{{Form::model($modelo,["route"=>["users.update",$modelo->id], "method"=>"PUT"])}}
<div class="form-group">
    {{Form::label('name','Nombre')}}
    {{Form::text('name',$modelo->name,["class"=>"form-control text-light","required"=>true])}}
</div>

<div class="form-group">
    {{Form::label('email','Email')}}
    {{Form::text('email',$modelo->email,["class"=>"form-control text-light","required"=>true])}}

</div>

<div class="form-group">
    {{Form::label('password','Nueva Contraseña')}}
    {{Form::text('password','***',["class"=>"form-control text-light","required"=>false])}}
</div>
<br>
{{Form::submit('Usuario Actualizado!',["class"=>"btn btn-success"])}}
{{Form::close()}}
@endsection
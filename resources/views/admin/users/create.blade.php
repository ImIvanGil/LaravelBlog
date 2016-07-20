
@extends('admin.template.main')


@section('title','Crear usuario')
@section('ptitle','Crear Usuario')

@section('content')

  {!! Form::open(['route' => 'admin.users.store','metod' => 'POST']) !!}
    <div class="form-group">
      {!! Form::label('name','Nombre') !!}
      {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Nombre']) !!}
    </div>

  {!! Form::close() !!}

@endsection

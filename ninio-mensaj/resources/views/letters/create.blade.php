@extends('layouts.app')

@section('content')
    <h1>Escribir carta</h1>
    {!! Form::open(['action' => 'LetterController@store', 'method' => 'LETTER', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('body', 'Carta')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Contenido de la carta'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Enviar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
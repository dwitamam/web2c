@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Create Post</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title' ] )}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'description'] )}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', [ 'id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text' ] )}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary' ])}}

        {!! Form::close() !!}
             
    </div>
@endsection
@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/posts" class="btn btn-primary">Go back</a>
        <h1> {{$post->title}} </h1>
        <div class="card card-body">
            <p> {{$post->body}} </p>
        </div><hr>
        
        <small> Created on {{$post->created_at}} </small>
    </div>
@endsection
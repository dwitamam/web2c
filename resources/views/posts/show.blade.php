@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/posts" class="btn btn-primary">Go back</a>
        <h1> {{$post->title}} </h1>
        <div class="card card-body">
            <p> {!!$post->body!!} </p>
        </div><hr>
        
        <small> Written on {{$post->created_at}} </small><hr>

        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
        @endif
    </div>
@endsection
@extends('layouts.app')

@section('content')

    <div class="container">
            <h1>Posts</h1>
            @if(count($posts)>0)
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm-4">
                            <div class="card card-body">
                                <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <p> {{$post->body}} </p>
                            </div>
                        </div>
                    @endforeach
                    {{$posts->links()}}
                </div>
            @else
                <p>No Post Found</p>
            @endif
    </div>
@endsection
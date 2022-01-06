@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Blog Post</h1>
                    <ul class="list-group">
                    @foreach($posts as $post)
                        <hr>
                        <div class="image-container">
                        <a href="{{route('posts.show', $post->id)}}"><img height="100" src="{{$post->path}}" alt=""></a>
                        </div> <br>
                        <li class="list-group-item"><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
                    @endforeach
                    </ul>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <hr>      
                </div>
            </div>
        </div>
    </div>
</div>
@stop

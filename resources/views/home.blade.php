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
                            </div>
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
                    <!-- Sweetalert -->
                    <div class="alertMe">
                        <div class="swal2-container swal2-fade swal2-shown" style="overflow-y: auto;">
                            <div role="dialog" aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-modal swal2-show" tabindex="-1" style="width: 500px; padding: 20px; background: rgb(255, 255, 255); display: block; min-height: 318px;">
                                <ul class="swal2-progresssteps" style="display: none;"></ul>
                                <div class="swal2-icon swal2-error" style="display: none;">
                                    <span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span>
                                    <span class="swal2-x-mark-line-right"></span></span>
                                </div>
                                <div class="swal2-icon swal2-question" style="display: none;">?</div>
                                <div class="swal2-icon swal2-warning" style="display: none;">!</div>
                                <div class="swal2-icon swal2-info" style="display: none;">i</div>
                                <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: block;">
                                    <div class="swal2-success-circular-line-left" style="background: rgb(255, 255, 255);"></div>
                                    <span class="swal2-success-line-tip swal2-animate-success-line-tip"></span> 
                                    <span class="swal2-success-line-long swal2-animate-success-line-long"></span>
                                    <div class="swal2-success-ring"></div> 
                                    <div class="swal2-success-fix" style="background: rgb(255, 255, 255);"></div>
                                    <div class="swal2-success-circular-line-right" style="background: rgb(255, 255, 255);"></div>
                                </div>
                                <img class="swal2-image" style="display: none;">
                                <h2 class="swal2-title" id="swal2-title">Good {{$day}} {{$user->name}}</h2>
                                <input class="swal2-input" style="display: none;">
                                <input type="file" class="swal2-file" style="display: none;">
                                <div class="swal2-range" style="display: none;">
                                    <output></output>
                                    <input type="range">
                                </div>
                                <select class="swal2-select" style="display: none;"></select>
                                <div class="swal2-radio" style="display: none;"></div>
                                <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"></label>
                                <textarea class="swal2-textarea" style="display: none;"></textarea>
                                <div class="swal2-validationerror" style="display: none;"></div>
                                <div class="swal2-buttonswrapper" style="display: block;">
                                    <button type="submit" id="inputAlert" class="swal2-confirm swal2-styled" 
                                    style="background-color: rgb(48, 133, 214); border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Sweetalert-->
                </div>
            </div>
        </div>
    </div>
</div>
@stop

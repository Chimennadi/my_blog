@extends("layouts.app")

@section("content")
<div class="container">
    <h1>Edit Post</h1>
    <form action="/posts/{{$post->id}}" method="post" class="form-group">
        {{csrf_field()}}
        <input type="submit" name="submit" value="EDIT" class="btn btn-primary">
        {{csrf_field()}}
        <hr>
        <input type="hidden" name="_method" value="PUT">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{$post->title}}">
        <hr>
        <div class="form-group">
            <label for="">Content</label>
            {{csrf_field()}}
            <textarea name="body" id="" cols="50" rows="10" class="form-control" placeholder="Enter your content"></textarea> <br>
            <hr>
        </div>
    </form>
    <form action="/posts/{{$post->id}}" method="post" class="form-group">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="submit" value="DELETE" class="btn btn-danger">
    </form>
</div>
@stop
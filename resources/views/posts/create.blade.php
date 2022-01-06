@extends("layouts.app")

@section("content")
<div class="container">
    <h1>Create Post</h1>
    <form action="/posts" method="post" class="form-group" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="title" class="form-control" placeholder="Enter title">
        <hr>
        <div class="form-group">
            <label for="">Content</label>
            {{csrf_field()}}
            <textarea name="body" id="" cols="50" rows="10" class="form-control" placeholder="Enter your content"></textarea> <br>
            <hr>
        </div>
        <div class="form-group">
            <label for="">Choose category</label>
            {{csrf_field()}}
            <select name="category" id="">
                <option value="Movies">Movies</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Music">Music</option>
                <option value="Art">Art</option>
                <option value="Politics">Politics</option>
                <option value="Business">Business</option>
                <option value="Sports">Sports</option>
            </select>
            <hr>
        </div>
        @csrf
        <div class="form-group">
            <input type="file" class="form-control-file" name="path" id="exampleInputFile">
        </div>
        <input type="submit" name="submit" value="CREATE" class="btn btn-primary">
    </form>
</div>
@stop
@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row" style="margin-top: 4%">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <!-- Blog Post -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h2>
                    <p><b>Category : </b> <a href="">{{$post->category}}</a> | <b>Sub Category : </b>National <b> Posted on </b>{{$post->created_at}}</p><hr />
                    <img class="img-fluid rounded" src="{{$post->path}}" alt="">
                    <p class="card-text"><p>
                    <span style="color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;">{{$post->body}}</span>
                    <br style="box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;">
                    <br style="box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;">
                    <br>
                </div>
                </div>
            <div class="card-footer text-muted">
        </div>
    </div>
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
        <!-- Search Widget -->
        <div class="card mb-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <form name="search" action="search.php" method="post">
        <div class="input-group">
            <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
            </span>
            </form>
            </div>
        </div>
    </div>
        <!-- Categories Widget -->
        <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Art</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Religion</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Recent News</h5>
                <div class="card-body">
                    <ul class="mb-0">
                        <li><a href="#">{{$post->title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: -8%">
        <div class="col-md-8">
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                <form name="Comment" method="post">
                    <input type="hidden" name="csrftoken" value="#" />
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <!---Comment Display Section --->
        <div class="media mb-4" style="position: relative; top: 200px;">
            <img class="d-flex mr-3 rounded-circle" src="../images/usericon.png" alt="">
            <div class="media-body">
                <h5 class="mt-0">Test user <br />
                    <span style="font-size:11px;"><b>at</b> {{$post->created_at}}</span>
                </h5>
                This is sample text for testing. 
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop
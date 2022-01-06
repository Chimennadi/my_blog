@extends("layouts.app")

@section("content")
<!-- Page Content -->
<div class="container">
    <div class="row" style="margin-top: 4%">
    <!-- Blog Entries Column -->
          <div class="col-md-8">
          <!-- Blog Post -->
              <div class="card mb-4">
                  @foreach($posts as $post)
                      <img class="card-img-top" width="100%" src="{{$post->path}}" alt="#">
                        <div class="card-body">
                              <h2 class="card-title">{{$post->title}}</h2>
                              <p><b>Category : </b> <a href="{{route('posts.show', $post->id)}}">{{$post->category}}</a> </p>
                              <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Read More →</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{$post->created_at}}           
                        </div>
                  @endforeach
              </div>
              <hr>
              <!-- Pagination -->
              <ul class="pagination justify-content-center mb-4">
                  <li class="page-item"><a href="#" class="page-link">First</a></li>
                  <li class="disabled page-item">
                      <a href="#" class="page-link">Prev</a>
                  </li>
                  <li class="disabled page-item">
                      <a href="# " class="page-link">Next</a>
                  </li>
                  <li class="page-item"><a href="#" class="page-link">Last</a></li>
              </ul>
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Search Widget -->
          <div class="card mb-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <form name="search" action="search.php" method="post">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search for..." required="">
                            <span class="input-group-btn">
                              <button class="btn btn-secondary" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            
          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                      <li>
                        <a href="#">Movies</a>
                      </li>

                      <li>
                        <a href="#">Sports</a>
                      </li>

                      <li>
                        <a href="#">Entertainment</a>
                      </li>

                      <li>
                        <a href="#">Politics</a>
                      </li>

                      <li>
                        <a href="#">Business</a>
                      </li>
                      <li>
                        <a href="#">Art</a>
                      </li>
                      <li>
                        <a href="#">Music</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @foreach($posts as $post)
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Recent News</h5>
            <div class="card-body">
                  <ul class="mb-0">
                        <li>
                            <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
                        </li>
                  </ul>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    @stop
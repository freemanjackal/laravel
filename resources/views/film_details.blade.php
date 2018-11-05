@extends('layouts.app')  

  @section('content') 
    <!-- Custom styles for this template -->
   {{-- <link href="css/blog-post.css" rel="stylesheet"> --}} 

 

    {{-- content--}}

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">{{$film->name}}</h1>

          <!-- Author -->
          <p class="lead">
            Genre : 
             @foreach ($film->genres as $genre)
               <a href="#">{{$genre}}</a>
             @endforeach
          </p>

          <hr>

          <!-- Date/Time -->
          <p>{{$film->release}}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>

            {{$film->description}}

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="{{ route('comment.create')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <textarea class="form-control col-sm-4" rows="3"></textarea>
                </div>
                <br>
                <input type="hidden" value="{{$film->id}}">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>

       
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

        
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 @endsection 
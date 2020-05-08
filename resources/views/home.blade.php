@extends('layouts/app', ['title' => "Bosh sahifa"])

@section('content')

    <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/header.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>YANGILIKLAR</h1>
            <span class="subheading">eng so'nggilari bizda</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      
      <div class="col-lg-9">
        
        <!-- carousel begin -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="card bg-dark text-white">
                    <img class="card-img" src="{{ asset('1.jpeg') }}" width="800px" height="450px" alt="Card image">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card bg-dark text-white">
                    <img class="card-img" src="{{ asset('1.jpeg') }}" width="800px" height="450px" alt="Card image">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card bg-dark text-white">
                    <img class="card-img" src="{{ asset('1.jpeg') }}" width="800px" height="450px" alt="Card image">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card bg-dark text-white">
                    <img class="card-img" src="{{ asset('1.jpeg') }}" width="800px" height="450px" alt="Card image">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                  </div>
                </div>
            </div>
            
        </div>
        <!-- carousel end -->

      </div>
      
      <div class="col-lg-3" >
        <div class="blog_right_sidebar">
          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Ko'p o'qilganlar</h3>
            <div class="media post_item">
                <img width="80px" src="thumb" alt="post">
                <div class="media-body">
                    <a href="">
                    <h3>title</h3>
                    </a>
                    <p>
                    <small class="text-muted">
                        <i class="fa fa-eye">12</i><br>
                        <i class="fa fa-calendar">20:00 | 20.04.2020</i>
                    </small>
                    </p>
                </div>
            </div>

            <div class="media post_item">
                <img width="80px" src="thumb" alt="post">
                <div class="media-body">
                    <a href="">
                    <h3>title</h3>
                    </a>
                    <p>
                    <i class="fa fa-eye">12</i>
                    ||
                    <i class="fa fa-calendar">20:00 | 20.04.2020</i>
                    </p>
                </div>
            </div>

            <div class="media post_item">
                <img width="80px" src="thumb" alt="post">
                <div class="media-body">
                    <a href="">
                    <h3>title</h3>
                    </a>
                    <p>
                    <i class="fa fa-eye">12</i>
                    ||
                    <i class="fa fa-calendar">20:00 | 20.04.2020</i>
                    </p>
                </div>
            </div>

            <div class="media post_item">
                <img width="80px" src="thumb" alt="post">
                <div class="media-body">
                    <a href="">
                    <h3>title</h3>
                    </a>
                    <p>
                    <i class="fa fa-eye">12</i>
                    ||
                    <i class="fa fa-calendar">20:00 | 20.04.2020</i>
                    </p>
                </div>
            </div>                          
          </aside>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">

    <div class="col-lg-12">
        <hr>
        <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">Mahalliy yangiliklar</h3>
    </div>

    <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
          <hr>
          <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">Dunyo yangiliklari</h3>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
          <hr>
          <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">Texnologiya yangiliklari</h3>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-lg-12">
          <hr>
          <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">Sport yangiliklari</h3>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ asset('1.jpeg') }}" alt="post">
                <div class="media-body">
                    <a href="#" class=""><h5 class="card-title">title</h5></a>
                    <p class="card-text">short</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">views</i>
                        ||
                        <i class="fa fa-calendar">created_at</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>
    
    </div>
  </div>

@endsection
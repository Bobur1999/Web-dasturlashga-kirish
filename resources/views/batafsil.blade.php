<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Batafsil</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="/css/clean-blog.min.css" rel="stylesheet">
  <link href="/css/bootstrap.css" rel="stylesheet">

</head>

<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="">Dengiz.uz</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
      <ul class="navbar-nav ml-auto">

        <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> <i class="fa fa-home"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('mahalliy')}}">Mahalliy</a></li>     
        <li class="nav-item"><a class="nav-link" href="{{route('dunyo')}}">Dunyo</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('texnologiya')}}">Texnologiya</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('sport')}}">Sport</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">Biz haqimizda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('aloqa')}}">Aloqa</a></li>
        <li>
            <form method="GET" action="#">
              <div class="form-group">
                <div class="input-group mb-8">
                  <input type="text" name="key" class="form-control" placeholder="Qidirish">
                  <div class="input-group-append">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </form>
        </li>

      </ul>

      </div>
    </div>
  </nav>
  <!-- Header end -->
  <div class="bg-light">
    
          <!-- Page Header -->
    <header class="masthead" style="background-image: url('/img/header.jpg')">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h1>Batafsil</h1>
            </div>
            </div>
        </div>
        </div>
    </header>

    <div class="container">
        <div class="row">

        <div class="col-lg-9 p-1">
                <div class="card ">
                    <img class="card-img-top" width="" src="{{ '/storage/'.$item->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item -> title}}</h5>
                        <p class="card-text">{{$item -> content}}</p>
                        <p class="card-text">
                        <small class="text-muted">
                            <i class="fa fa-eye">{{$item -> views}}</i><br>
                            <i class="fa fa-calendar">{{$item -> created_at -> format('H:i|d/m/y')}}</i>
                        </small>
                        </p>
                    </div>
                </div>
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
  
  </div>
  <!-- Footer -->
  <footer class="bg-dark">
    <div class="container">
      <div class="row">

      <ul class="navbar-nav ml-auto">

      <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> <i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('mahalliy')}}">Mahalliy</a></li>     
      <li class="nav-item"><a class="nav-link" href="{{route('dunyo')}}">Dunyo</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('texnologiya')}}">Texnologiya</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('sport')}}">Sport</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('about')}}">Biz haqimizda</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('aloqa')}}">Aloqa</a></li>
<!--       
      <li>
          <form method="GET" action="#">
            <div class="form-group">
              <div class="input-group mb-8">
                <input type="text" name="key" class="form-control" placeholder="Qidirish">
                <div class="input-group-append">
                  <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </form>
      </li> -->

      </ul>

        <div class="col-lg-12 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/js/clean-blog.min.js"></script>
  <script src="/js/bootstrap.js"></script>

</body>

</html>

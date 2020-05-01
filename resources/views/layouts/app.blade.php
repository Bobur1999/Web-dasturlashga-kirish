<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{$title}}</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">

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
      @yield('content')  
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>
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
                    
        </div>
    </div>
  
  </div>
  <!-- Footer -->
  <footer class="bg-dark">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class=""><i class="fa fa-home"></i></span>
            <div class="media-body text-primary">
              <br>
              <h5>O'zbekiston, Xorazm.</h5>
              <p>Al-Xorazmiy ko'chasi, 110-uy</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <div class="media-body text-primary">
              <br>
              <h5><a class="" href="tel:+998937462676">+998 93 746 26 76</a></h5>
              <p>Dushanbadan shanbagacha, 10:00 dan 16:00 gacha</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope"></i></span>
            <div class="media-body text-primary">
              <br>
              <h5><a class="" href="mailto:admin@admin.com">admin@admin.com</a></h5>
              <p>Istalgan vaqtda bizga so'rovingizni yuboring!</p>
            </div>
          </div>
        </div>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> <i class="fa fa-home"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('mahalliy')}}">Mahalliy</a></li>     
          <li class="nav-item"><a class="nav-link" href="{{route('dunyo')}}">Dunyo</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('texnologiya')}}">Texnologiya</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('sport')}}">Sport</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('about')}}">Biz haqimizda</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('aloqa')}}">Aloqa</a></li>
        </ul>

        <div class="col-lg-12 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/" target="blank" >
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/" target="blank" >
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/" target="blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
    <small class="text-right">
      <p>created by: Boburbek Rustamov</p>
    </small>
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

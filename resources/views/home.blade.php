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
        <div class="col-lg-8">
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
                    @foreach($mahalla as $item)
                    <div class=" bg-dark text-white">
                        <img class="card-img" src="{{'/storage/'.$item->img}}" width="800px" height="450px" alt="Card image">
                    </div>
                    @endforeach
                </div>
                <div class="carousel-item">
                    @foreach($dunyo as $item)
                    <div class=" bg-dark text-white">
                        <img class="card-img" src="{{'/storage/'.$item->img}}" width="800px" height="450px" alt="Card image">
                    </div>
                    @endforeach
                </div>
                <div class="carousel-item">
                    @foreach($texnologiya as $item)
                    <div class=" bg-dark text-white">
                        <img class="card-img" src="{{'/storage/'.$item->img}}" width="800px" height="450px" alt="Card image">
                    </div>
                    @endforeach
                </div>
                <div class="carousel-item">
                    @foreach($sport as $item)
                    <div class=" bg-dark text-white">
                        <img class="card-img" src="{{'/storage/'.$item->img}}" width="800px" height="450px" alt="Card image">                        
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
        <!-- carousel end -->

        </div>
            <div class="col-lg-4">
            <small class="text-muted">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptates voluptatum atque, nemo praesentium culpa eum cum numquam consequatur quos quas ex, accusantium, quod adipisci saepe velit. Odit, necessitatibus deserunt.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio voluptas quae quod illo tempora iure enim! Fugiat fugit dolor molestiae minus rem qui assumenda, molestias culpa esse deserunt, officiis consequuntur.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, possimus voluptas error veniam culpa vel officia ipsa nulla quae optio, quibusdam ut labore iusto minima. Nulla tenetur blanditiis placeat esse.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia commodi hic veritatis corrupti voluptatem quo a corporis assumenda molestias, libero atque, exercitationem eaque ipsam est? Nam necessitatibus molestias consequatur commodi?
                </p>
                <h6 class="text-right">
                    Jhon Doe
                </h6>
            </small>
            </div>
        </div>
    </div>
</div>

  
<div class="container">
    <div class="row">
        <div class="row col-lg-12">
        @foreach( $a as $item)
        <div class="col-sm-6 p-2">
            <div class="media">
                <img class="mr-3" width="150px" src="{{ '/storage/'.$item->thumb }}" alt="post">
                <div class="media-body">
                    <a href="{{route('batafsil1', $item -> id)}}" class=""><h5 class="card-title">{{$item->title}}</h5></a>
                    <p class="card-text">{{$item->short}}</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">{{$item -> views}}</i>
                        ||
                        <i class="fa fa-calendar">{{$item->created_at->format('H:i|d/m/y')}}</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>
        @endforeach
        @foreach( $b as $item)
        <div class="col-sm-6 p-2">
            <div class="media">
                <img class="mr-3" width="150px" src="{{ '/storage/'.$item->thumb }}" alt="post">
                <div class="media-body">
                    <a href="{{route('batafsil2', $item -> id)}}" class=""><h5 class="card-title">{{$item->title}}</h5></a>
                    <p class="card-text">{{$item->short}}</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">{{$item -> views}}</i>
                        ||
                        <i class="fa fa-calendar">{{$item->created_at->format('H:i|d/m/y')}}</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>
        @endforeach
        @foreach( $c as $item)
        <div class="col-sm-6 p-2">
            <div class="media">
                <img class="mr-3" width="150px" src="{{ '/storage/'.$item->thumb }}" alt="post">
                <div class="media-body">
                    <a href="{{route('batafsil3', $item -> id)}}" class=""><h5 class="card-title">{{$item->title}}</h5></a>
                    <p class="card-text">{{$item->short}}</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">{{$item -> views}}</i>
                        ||
                        <i class="fa fa-calendar">{{$item->created_at->format('H:i|d/m/y')}}</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>
        @endforeach
        @foreach( $d as $item)
        <div class="col-sm-6 p-2">
            <div class="media">
                <img class="mr-3" width="150px" src="{{ '/storage/'.$item->thumb }}" alt="post">
                <div class="media-body">
                    <a href="{{route('batafsil4', $item -> id)}}" class=""><h5 class="card-title">{{$item->title}}</h5></a>
                    <p class="card-text">{{$item->short}}</p>
                    <p class="card-text">
                    <small class="text-muted">
                        <i class="fa fa-eye">{{$item -> views}}</i>
                        ||
                        <i class="fa fa-calendar">{{$item->created_at->format('H:i|d/m/y')}}</i>
                    </small>
                    </p>

                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
  </div>

@endsection
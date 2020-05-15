@extends('layouts/app', ['title' => "Yangiliklar"])

@section('content')

        <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/header.jpg')">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h1>Dunyo yangiliklari</h1>
                <span class="subheading">eng so'nggilari bizda</span>
            </div>
            </div>
        </div>
        </div>
    </header>

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
                            @foreach($dunyo as $item)
                            <div class=" bg-dark text-white">
                                <img class="card-img" src="{{'/storage/'.$item->img}}" width="800px" height="450px" alt="Card image">
                            </div>
                            @endforeach
                        </div>
                        <div class="carousel-item">
                            @foreach($mahalla as $item)
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
            
            <div class="col-lg-3" >
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">

                        <form method="GET" action="{{route('search2')}}">
                        <div class="form-group">
                            <div class="input-group mb-8">
                            <input type="text" value="" name="key" class="form-control" placeholder="Qidirish">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            </div>
                        </div>
                        </form>

                        <small><h5 class="widget_title">Ko'p o'qilganlar</h5></small>
                        @foreach($views as $view)
                        <div class="media post_item">
                            <img width="80px" src="{{'/storage/'.$view->thumb}}" alt="post">
                            <div class="media-body">
                                <small class="text-muted">
                                <a href="{{route('batafsil2', $view -> id)}}">
                                <p class="text-dark">{{$view -> title}}</p>
                                </a>
                                <p>
                                <i class="fa fa-eye">{{$view -> views}}</i><br>
                                <i class="fa fa-calendar">{{$view->created_at->format('H:i|d/m/y')}}</i>
                                </p>
                                </small>
                            </div>
                        </div>
                        @endforeach 
                    </aside>
                </div>
            </div>         
            @foreach( $news as $item)
            <div class="col-sm-6 p-2">
                <div class="media border">
                    <img class="mr-3" width="100px" src="{{ '/storage/'.$item->thumb }}" alt="post">
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
        </div>
    </div>
@endsection
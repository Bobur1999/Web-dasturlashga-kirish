@extends('layouts/app', ['title' => "Yangiliklar"])

@section('content')

    <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/header.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
              <h1>Sport yangiliklari</h1>
              <span class="subheading">eng so'nggilari bizda</span>
          </div>
        </div>
      </div>
    </div>
  </header>
    
  <div class="container">
    <div class="row">
        
        <div class="col-lg-9">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
        @foreach( $sport as $item)
        <div class="col-sm-6 p-2">
            <div class="media border">
                <img class="mr-3" width="100px" src="{{ '/storage/'.$item->thumb }}" alt="post">
                <div class="media-body">
                    <a href="{{route('batafsil4', $item -> id)}}" class=""><h5 class="card-title">{{$item->title}}</h5></a>
                    <p class="card-text">{{$item->short}}</p>
                    <small class="text-muted">
                        <i class="fa fa-eye">{{$item -> views}}</i>
                        ||
                        <i class="fa fa-calendar">{{$item->created_at->format('H:i|d/m/y')}}</i>
                    </small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>

@endsection
@extends('layouts/app', ['title' => 'Qidiruv'])

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/header.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
              <h1>Yangiliklar</h1>
              <span class="subheading">qidiruv qismi</span>
          </div>
        </div>
      </div>
    </div>
  </header>

    <div class="container">
        <div class="row">
           @if(!count($results))
                <div class="col-lg-9 p-2 alert alert-primary">
                    Sizning "{{ request()->get('key') }}" so'rovingiz bo'yicha hech nima topilmadi.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif       
            <div class="col-lg-8 col-md-10 mx-auto p-2">       
            @foreach( $results as $item)
                <div class="media border p-2">
                    <img class="mr-3" width="200px" src="{{ '/storage/'.$item->thumb }}" alt="post">
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
            @endforeach
            </div>
        </div>
    </div>

@endsection
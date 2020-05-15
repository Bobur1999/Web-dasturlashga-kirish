@extends('layouts/app', ['title' => "Aloqa"])

@section('content')
    
    <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/header.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
              <h1>Aloqa</h1>
              <span class="subheading">bizga savolingiz bo'lsa yuboring.</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mb-5">
          @if(session()->has('success'))
              <div class="alert alert-success">
                  {{session()->get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          @endif
          @if($errors->any())
              <div class="alert alert-danger">
                  <ul>    
                      @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </ul>
              </div>
          @endif
          <form class="form-contact contact_form" action="{{route('contact.store')}}" method="post" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="row form-group">
                    <textarea  class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Xabaringizni kiriting">{{ old('message') }}</textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row form-group">
                  <input value="{{ old('name') }}" class="form-control" name="name" id="name" type="text" placeholder="Ism sharifingizni kiriting">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row form-group">
                  <input value="{{ old('email') }}" class="form-control" name="email" id="email" type="email" placeholder="Emailingizni kiriting">
                </div>
              </div>
              <div class="col-12">
                <div class="row form-group">
                  <input value="{{ old('subject') }}" class="form-control" name="subject" id="subject" type="text" placeholder="Xabar mavzusini kiriting">
                </div>
              </div>
            </div>
            <div class="row form-group mt-3">
              <button type="submit" class="btn btn-secondary btn-md text-white">Yuborish</button>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class=""><i class="fa fa-home"></i></span>
            <div class="media-body">
              <br>
              <h3>O'zbekiston, Xorazm.</h3>
              <p>Al-Xorazmiy ko'chasi, 110-uy</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <div class="media-body">
              <br>
              <h3><a class="text-dark" href="tel:+998937462676">+998 93 746 26 76</a></h3>
              <p>Dushanbadan shanbagacha, 10:00 dan 16:00 gacha</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope"></i></span>
            <div class="media-body">
              <br>
              <h3><a class="text-dark" href="mailto:admin@admin.com">admin@admin.com</a></h3>
              <p>Istalgan vaqtda bizga so'rovingizni yuboring!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
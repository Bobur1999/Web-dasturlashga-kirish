@extends('layouts/app', ['title' => "Aloqa"])

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
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mb-5">
          @if(session()->has('success'))
              <div class="alert alert-success">
                  {{session()->get('success')}}
              </div>
          @endif
          @if($errors->any())
              <div class="alert alert-danger">
                  <ul>    
                      @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
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
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
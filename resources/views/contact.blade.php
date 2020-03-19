@extends('layouts.frontend.app')

@section('title','Login')

@push('css')
<link href="{{asset('assets/frontend/img/favicon.png')}}" rel="icon">
<link href="{{asset('assets/frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="{{asset('assets/frontend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="{{asset('assets/frontend/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/lib/animate/animate.min.css" rel="stylesheet')}}">
<link href="{{asset('assets/frontend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">

@endpush

@section('content') 




<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Contact US</h1>
          <span class="color-text-a">Find us, anytime, anywhere!.</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Contact
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ Contact Star /-->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-map box">
          <div id="map" class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.4005663764133!2d110.360442!3d1.5274759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7a2775b8381%3A0x65393d613443d24e!2sJak%20Kwang%20Builders%20%26%20Developers!5e0!3m2!1sen!2smy!4v1580563272205!5m2!1sen!2smy"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-sm-12 section-t8">
        <div class="row">
          <div class="col-md-7">
            <form class="form-a contactForm" action="" method="post" role="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-a">Send Message</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 section-md-t3">
            <div class="icon-box section-b2">
              <div class="icon-box-icon">
                <span class="ion-ios-paper-plane"></span>
              </div>
              <div class="icon-box-content table-cell">
                <div class="icon-box-title">
                  <h4 class="icon-title">Say Hello</h4>
                </div>
                <div class="icon-box-content">
                  <p class="mb-1">Email.
                    <span class="color-a">enquiry@jakkwang.com</span>
                  </p>
                  <p class="mb-1">Phone.
                    <span class="color-a">(60)-82-457777</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="icon-box section-b2">
              <div class="icon-box-icon">
                <span class="ion-ios-pin"></span>
              </div>
              <div class="icon-box-content table-cell">
                <div class="icon-box-title">
                  <h4 class="icon-title">Find us in</h4>
                </div>
                <div class="icon-box-content">
                  <p>Jak Kwang Builders &amp; Developers Sdn. Bhd.<br>
                    Lot 7890 &amp; 7891, 1st Floor,<br>
                    Block A, Queens Court,<br>
                    Jalan Simpang Tiga,<br>
                    93300 Kuching, Sarawak,<br>
                    Malaysia<br>
                    Tel: (60)-82-457777<br>
                    Fax: (60)-82-459999<br>
                    Email: <a href="mailto:enquiry@jakkwang.com">enquiry@jakkwang.com</a></p>
                </div>
              </div>
            </div>
            <div class="icon-box">
              <div class="icon-box-icon">
                <span class="ion-ios-redo"></span>
              </div>
              <div class="icon-box-content table-cell">
                <div class="icon-box-title">
                  <h4 class="icon-title">Social networks</h4>
                </div>
                <div class="icon-box-content">
                  <div class="socials-footer">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Contact End /-->




  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
@endsection


@push('js')
<!-- Contact Form JavaScript -->
  <!-- JavaScript Libraries -->
  <script src="{{asset('assets/frontend/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('assets/frontend/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('assets/frontend/js/main.js')}}"></script>
@endpush
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

<style>
.parallax {
  /* The image used */
  background-image: url('{{asset('assets/frontend/img/bg.jpg')}}');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
@endpush

@section('content') 

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">We Do Great Design For Creative Folks</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->


  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="{{asset('assets/frontend/img/slide-about-1.jpg')}}" alt="" class="img-fluid">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">JakKwang
              <span></span>
              <br> Since 1973</h3>
            <p>Builders & Developers</p>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="{{asset('assets/frontend/img/about-2.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span>JakKwang Exclusive Property</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">Corporate
                  <span class="color-d">Profile</span></h3>
              </div>
              <p class="color-text-a">
                Established since 1971, Jak Kwang Builders & Developers Sdn Bhd is one of the most trusted property developers in Kuching. Our success in gaining property purchasers is associated with our ability to plan properties of high value, which carries many value-added features to address today ‘customers’ need.
              </p>
              <p class="color-text-a">
                Over the last four decades, the Company had built up an impressive record of successfully completing every housing development project undertaken. Our key to success is ability to provide better homes. Many repeated sales to past customers are very much associated with the better ability to plan and deliver the much sought after values in home properties.
              </p>
              
              <p class="color-text-a">
                Owing to the general population becoming more affluent, Jak Kwang ventures into high-end strata title and housing development. The new approach to property development has been met with overwhelming success. Among major projects undertaken by the Company includes De Summit Condominium completed in year 2003 which creates a landmark in the City of Kuching. In year 2006, our development of 7th Avenue located at BDC has won the PAM 2006 Awards for Excellence in Architecture.
              </p>

              
              <p class="color-text-a">
                Moving forward with our latest development, the Canaan Square is an exclusively strata-titled commercial hub which offers strata-titled commercial units. Designed by award winning architects, Canaan Square is built for conducive environment both for business and pleasure. It is also the first of its kind as it is the first commercial centre in Kuching that has a 24-hours guard system in place and it is fully gated, for the safety of its tenants as well as the public. Strategically located with fabulous connectivity, well planned infrastructure and proximity to both residential and commercial catchment areas, it is an ideal business location with contemporary outlook yet affordable investment for all.
              </p>
              <p class="color-text-a">
                With this success, the Company renewed its plan to meet all future customers’ demand for better homes and property investments.
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

  <!--/ Team Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Meet Our Team</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="{{asset('assets/frontend/img/agent-7.jpg')}}" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Margaret Sotillo
                      <br> Escala</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +54 356 945234</p>
                  <p>
                    <strong>Email: </strong> agents@example.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
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
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="{{asset('assets/frontend/img/agent-6.jpg')}}" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Stiven Spilver
                      <br> Darw</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +54 356 945234</p>
                  <p>
                    <strong>Email: </strong> agents@example.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
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
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="{{asset('assets/frontend/img/agent-5.jpg')}}" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Emma Toledo
                      <br> Cascada</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +54 356 945234</p>
                  <p>
                    <strong>Email: </strong> agents@example.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
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
  </section>
  <!--/ Team End /-->





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
@extends('layouts.backend.app')



@section('title', 'Dashboard')





@push('css')

      <!-- Custom fonts for this theme -->
  <link href="{{asset('assets/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="{{asset('assets/backend/css/freelancer.min.css')}}" rel="stylesheet">




  <style>
    .description {
  font-style: italic;
  font-weight: 200;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
}


.clue {
  margin-left: 0.25rem;
  font-size: 0.9rem;
  color: #e4e4e4;
}

.text-center {
  text-align: center;
}



/* form */

form {
  background: var(--color-darkblue-alpha);
  padding: 2.5rem 0.625rem;
  border-radius: 0.25rem;
}

@media (min-width: 480px) {
  form {
    padding: 2.5rem;
  }
}

.form-group {
  margin: 0 auto 1.25rem auto;
  padding: 0.25rem;
}

.form-control {
  display: block;
  width: 100%;
  height: 2.375rem;
  padding: 0.375rem 0.75rem;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.input-radio,
.input-checkbox {
  display: inline-block;
  margin-right: 0.625rem;
  min-height: 1.25rem;
  min-width: 1.25rem;
}

.input-textarea {
  min-height: 120px;
  width: 100%;
  padding: 0.625rem;
  resize: vertical;
}

.submit-button {
  display: block;
  width: 100%;
  padding: 0.75rem;
  background: var(--color-green);
  color: inherit;
  border-radius: 2px;
  cursor: pointer;
}

    </style>

@endpush





@section('content')



<body style="background-image: url('{{asset('assets/frontend/img/bg.jpg')}}');      min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;" id="page-top">

  <!-- Navigation -->
  <nav style="background-color: #510c05!important;" class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><span class="mr-2 d-none d-lg-inline text-gray-600 small">RetirementApp</span></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Calculator</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();" >Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

              {{ csrf_field() }}
            
            </form>
          </li>
          {{-- <li>
            <a href="{{ route('logout') }}"

  onclick="event.preventDefault();

           document.getElementById('logout-form').submit();">

  <i class="btn btn-primary">Logout</i>

</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header style="background-color: #ffffff00 !important;" class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Welcome, {{Auth::user()->name}}</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Ideal RetirementApp</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 style="color: #ffffff!important;" class="page-section-heading text-center text-uppercase text-secondary mb-0">Calculator</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div style="background-color: #ffffff!important;" class="divider-custom-line"></div>
        <div style="color: #ffffff!important;" class="divider-custom-icon">
          <i style="color: #ffffff!important;" class="fas fa-star"></i>
        </div>
        <div style="background-color: #ffffff!important;" class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <div class="col-md-6 col-lg-4">
        </div>

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{asset('assets/backend/img/portfolio/cabin.png')}}" alt="">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>


  <!-- Footer -->
  <footer style="background-color: #510c05!important;" class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">

        </div>


        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">

        </div>


      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2020</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div  class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div style="position:fixed;  top:0; left:0; bottom:0; right:0; width:100%; 
      height:100%; border:none; margin-top: 60px; padding:0; overflow:hidden; z-index:999999;" class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div style="overflow-y: scroll; background-image: url(https://everydayjournal.000webhostapp.com/assets/frontend/img/bg.jpg);
        min-height: 500px;
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;" class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div  class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                {{-- <h6 class="portfolio-modal-title text-secondary text-uppercase mb-0">RetirementApp</h6> --}}
                <!-- Icon Divider -->
                {{-- <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div> --}}
                <!-- Portfolio Modal - Image -->
                {{-- <img class="img-fluid rounded mb-5" src="img/portfolio/cabin.png" alt=""> --}}
                <!-- Portfolio Modal - Text -->
                <p style="text-align: center;" class="mb-5">


                  <ul  style="text-align: center;display: -webkit-inline-box !important;     color: #e4dabd !important;
                  font-weight: bold;" class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a  style="text-align: center;    color: #e4dabd !important;
                      font-weight: bold;" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Calculate</a>
                    </li>
                    <li style="text-align: center;" class="nav-item">
                      <a style="text-align: center;    color: #e4dabd !important;
                      font-weight: bold;" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Preview</a>
                    </li>
                    <li class="nav-item">
                      
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  
                      <div class="container text-center">
                      
                      

                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Current Age</label>
                        <input type="text" id="current_age"class="form-control" placeholder="Current your age" />
                      </div>

                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Retirement Age</label>
                        <input type="text" id="retirement_age" class="form-control" placeholder="Retirement age" />
                      </div>

                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Expected Monthly Expenses during Retirement</label>
                        <input type="text" id="expected_monthly" class="form-control" placeholder="Expected monthly expenses" />
                      </div>

                      <p style="text-align: center;    color: #e4dabd !important;
                      font-weight: bold;" id="expectedyearly"></p>

                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Expected Lifespan post Retirement</label>
                        <input type="text" id="expected_post_retirement" class="form-control" placeholder="Expected lifespan post retirement" />
                      </div>
                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Inflation Rate</label>
                        <input type="text" id="inflation_rate" class="form-control" placeholder="Enter Inflation Rate" />
                      </div>
                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Interest Rate</label>
                        <input type="text" id="interest_rate" class="form-control" placeholder="Enter Interest Rate" />
                      </div>

                      <p style="text-align: center;    color: #e4dabd !important;
                      font-weight: bold;" id="testing"></p>

                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Annual Income Put Aside for retirement</label>
                        <input type="text" id="income_aside" class="form-control" placeholder="Income Put Aside for Retirement" />
                      </div>

                      <p style="text-align: center;    color: #e4dabd !important;
                      font-weight: bold;" id="projectedsavings"></p>


                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Projected Value of Insurance Policies</label>
                        <input type="text" id="projected_insurance_policy" class="form-control" placeholder="Projected Value of Insurance Policies" />
                      </div>

                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Projected CPF Savings</label>
                        <input type="text" id="projected_cpf_savings" class="form-control" placeholder="Projected CPF Savings" />
                      </div>

                      <div class="form-group">
                        <label style="text-align: center;    color: #e4dabd !important;
                        font-weight: bold;" id="number-label" for="number">Projected Value of Other Assets</label>
                        <input type="text" id="projected_value_assets" class="form-control" placeholder="Projected Value of Other Assets" />
                      </div>


                      <p style="text-align: center;    color: #e4dabd !important;
                      font-weight: bold;" id="totalshortfall"></p>
                      
                      </div>
                  
                  
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      {{-- <p id="expectedyearly"></p> --}}
                      {{-- <p id="testing"></p> --}}
                      {{-- <p id="sumrequired"></p> --}}
                      {{-- <p id="projectedsavings"></p> --}}
                      {{-- <p id="totalshortfall"></p> --}}

                      <div id="chartContainer" style="height: 300px; width: 100%;">
                      </div>

                      <div class="col-md-4 col-lg-4 col-sm-4">

                      </div>

                      <div class="col-md-4 col-lg-4 col-sm-4">

                      </div>

                      <div class="col-md-4 col-lg-4 col-sm-4">

                      </div>

                      {{-- <p id="demo"></p> --}}

                    </div>



                    
                </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>


@endsection





@push('js')

  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

     <!-- Bootstrap core JavaScript -->
  <script src="{{asset('assets/backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('assets/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{asset('assets/backend/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('assets/backend/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('assets/backend/js/freelancer.min.js')}}"></script>

  <script src="{{asset('assets/backend/js/calculator.js')}}"></script>

@endpush




</div>
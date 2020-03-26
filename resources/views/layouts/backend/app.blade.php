<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Freelancer - Start Bootstrap Theme</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="{{asset('assets/backend/css/freelancer.min.css')}}" rel="stylesheet">



    @stack('css')



</head>

<body id="page-top">



<!-- Page Wrapper -->

<div id="wrapper">



        <!-- Sidebar -->



       



        <!-- End of Sidebar -->

    

        <!-- Content Wrapper -->



        @yield('content')



        <!-- End of Content Wrapper -->

    

      </div>


     <!-- Bootstrap core JavaScript -->
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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

  @stack('js')

</body>

</html>


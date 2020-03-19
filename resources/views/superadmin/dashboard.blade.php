@extends('layouts.backend.app')

@section('title', 'Dashboard')


@push('css')

@endpush


@section('content')
<div id="content-wrapper" class="d-flex flex-column">
  @include('layouts.backend.partial.topbar')    
        <!-- Main Content -->
        <div id="content">
  
        <iframe style=" 
        height:100%; border:none;  padding:0; overflow:hidden !important; z-index:999999;" class="container-fluid" src="{{route('home')}}"><iframe>
  
        </div>
        <!-- End of Main Content -->
  
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
  
      </div>
@endsection


@push('js')


      
@endpush
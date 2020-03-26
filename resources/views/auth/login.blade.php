@extends('layouts.frontend.app')

@section('title','RetirementApp')

@push('css')


<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Retirement App | Tutankhamun Technologies</title>
<meta name="description" content="RetirementApp" />
<meta name="keywords" content="retirement, calculator, financial services, tutankhamun, tut, tech" />
<meta name="author" content="Tutankhamun Technologies" />
<link rel="shortcut icon" href="favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/normalize.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/demo.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/component.css')}}" />
<style>
.input{

    border: none;
    margin-top: 10px;

}
</style>
@endpush



@section('content')
<div class="segmenter" style="background-image: url('{{asset('assets/frontend/img/bg.jpg')}}'); background-image: url('{{asset('assets/frontend/img/bg.jpg')}}');     min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
    
  <p style="text-align: center;">   <section style="margin-top:120px !important; "  class="page-section" id="contact">

        <div  class="container">
    
          <!-- Contact Section Heading -->
          <h1 style="text-align: center;" class="title">Login</h1>
    
          <!-- Icon Divider -->
    
    
          <!-- Contact Section Form -->
          <div class="row">
            <div class="col-lg-8 mx-auto">
                <form style="    display: table !important;
                cursor: pointer;
                text-align: center;
                pointer-events: auto;
                color: #333;
                border: 0;
                border-radius: 1.85em;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-size: 0.885em;
                padding: 1em 2em;
                margin: 0 auto;
                background: rgba(251, 224, 148, 0.8);
                -webkit-transition: background 0.3s, opacity 0.3s;
                transition: background 0.3s, opacity 0.3s;" class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    @csrf
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    
                        <div class="col-md-6">
                            <input style="border: none; margin-top: 10px;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
    
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div style="margin-top: 10px;" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>
    
                        <div class="col-md-6">
                            <input style="border: none; margin-top: 10px;" id="password" type="password" class="form-control" name="password" required>
    
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div style="margin-top: 10px;" class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
    
                    <div style="margin-top: 10px;" class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button style="margin-top: 10px;" type="submit" class="btn btn-primary">
                                Login
                            </button>
    
                            <a  style="margin-top: 10px;"class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
          </div>
    
        </div>
      </section>
  </p>


      

    
</div>




@endsection

@push('js')


    
@endpush
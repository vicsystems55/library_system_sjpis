{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minidigo Landing Page</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/switches.css')}}">
    <style>
        .form-form .form-form-wrap form .field-wrapper svg.feather-eye {
            top: 46px;
        }
    </style>
</head>
<body>

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <img width="100" height="100" class="img-thumbnail rounded-circle" src="{{config('app.url')}}avatars/{{$user_data->avatar}}" alt="">

                        <h1 style="font-size: 44pt" class="text-left ">Hello,</h1>

                        <h1 style="font-size: 30pt" class="text-left h1">I am {{$user_data->name}}</h1>

                        <h6 style="font-size: 20pt" class="text-left pt-5">I will like to introduce you to an amazing business opportunity!!</h6>
                  
                        
                        <form method="POST" action="{{ route('login') }}" class="text-left">

                            @csrf

                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Email</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>

                                <div class="d-sm-flex justify-content-end ">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-warning mx-auto" >{{ __('Get Started') }}</button>
                                    </div>
                                    <div class="field-wrapper">
                                       
                                    </div>

                                </div>

                                <div class="division">
                                     

                                <div class="social">
                                    

                                    <!-- <a href="{{ route('password.request') }}" class="btn social-fb">
                                        <span class="brand-name">Forgot Password?</span>
                                    </a> -->
                                  
                                </div>


                            </div>
                        </form>

                    </div>                    
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/authentication/form-2.js')}}"></script>
</body>
</html>



{{-- @endsection --}}

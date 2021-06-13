@extends('layouts.app')

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
                <a href="index.html" class="ml-md-5">
                    <img alt="image-404" src="{{asset('storage/img/90x90.jpg')}}" class="theme-logo">
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid error-content">
        <div class="">
            <h1 class="error-number">Package Purchase!!</h1>
            <p class="mini-text">Your purchase of MindigoGlobal Pack was successfully!</p>
            
            <a href="index.html" class="btn btn-primary mt-5">Go Back</a>
        </div>
    </div>    

@endsection
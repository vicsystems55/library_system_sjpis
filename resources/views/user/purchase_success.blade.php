@extends('layouts.app')

@section('content')
    
    <div class="container-fluid maintanence-content">
        <div class="">
            <div class="maintanence-hero-img">
                <img alt="logo" src="{{asset('storage/img/90x90.jpg')}}">
            </div>
            <h1 class="error-title">Purchase Successful</h1>
            <p class="error-text">Thank you for purchase.</p>
            <p class="text">You will find further information on how we shall proceed</p>
            <a href="{{route('choose')}}" class="btn btn-info mt-4">Back to Dashboard</a>
        </div>
    </div>
    
@endsection
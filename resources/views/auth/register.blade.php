@extends('layouts.app' )

<?php


    $category_name = 'auth';
    $page_name = 'auth_default';
    $has_scrollspy = 0;
    $scrollspy_offset = '';


?>

@section('content')

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content pt-5">

                        <h1 class="">Join Our Library</h1>
                        <p class="signup-link">Already have a member? <a href="{{route('login')}}">Log in</a></p>
                        <form method="POST" action="{{ route('register') }}"  class="text-left">

                        @csrf
                            <div class="form">

                                

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="name" type="text" class="form-control" placeholder="Fullname">
                                    
                                  
                                        @error('name')
                                        <span class=" text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="email" name="email" type="text" value="" placeholder="Email" required>
                                        @error('email')
                                        <span class=" text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>

                                <div id="phone-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>

                                    <input id="phone" name="phone" type="text"  placeholder="Phone" required>
                                        @error('phone')
                                        <span class=" text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                
                                <div id="class-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>

                                    <input id="class" name="class" type="text" value=""  placeholder="Enter Class" required>
                                        @error('class')
                                        <span class=" text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>


                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" value="" placeholder="Password">
                                        @error('password')
                                        <span class=" text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password_confirmation" type="password" value="" placeholder="Confirm Password">
                                </div>

                                <div id="class-field" class="field-wrapper input">

                                    <select name="" id="" class="form-control">
                                        <option value="">--Select Category--</option>
                                        <option value="">Science</option>
                                        <option value="">Art</option>
                                        <option value="">Commercial</option>
                                        <hr>
                                        <option value="">Junior Class</option>
                                    </select>
                                        @error('class')
                                        <span class=" text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                {{-- <div class="field-wrapper terms_condition">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input" required>
                                          <span class="new-control-indicator"></span><span>I agree to the <a href="javascript:void(0);">  terms and conditions </a></span>
                                        </label>
                                    </div>
                                </div> --}}
                                <div class=" justify-content-between mt-3">
                                   
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-warning btn-block btn-lg" value="">Create account</button>
                                    </div>
                                </div>

                            </div>
                        </form>                        
                        <p class="terms-conditions text-warning">© 2021 All Rights Reserved. 
                        <a href="https://mindigo.co.uk">SJPIS</a>
                        
                         <!-- <a href="{{config('app.url')}}/pages/privacy_policy"></a> 
                         
                         <a href="{{config('app.url')}}/pages/privacy_policy">Privacy</a>,

                          and <a href="{{config('app.url')}}/pages/privacy_policy">Terms</a> -->
                          
                          </p>
                          
                          <!-- <p class="terms-conditions">© 2021 All Rights Reserved. <a href="index.html">Mindigoglobal</a> is a product of vicSystems. <a href="{{config('app.url')}}/pages/privacy_policy"></a> <a href="{{config('app.url')}}/pages/privacy_policy">Privacy</a>, and <a href="{{config('app.url')}}/pages/privacy_policy">Terms</a>.</p> -->

                    </div>                    
                </div>
            </div>
        </div>


        <div class="form-image">


            <div style="background-color: black; background-image: url({{config('app.url')}}img/school.jpeg);" class="l-image ">
            </div>
        </div>
    </div>

@endsection
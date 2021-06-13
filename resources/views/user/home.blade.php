@extends('layouts.app')

<link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />  
      

@section('content')

    <div class="layout-px-spacing">


        <h2 class="mt-3 ">Hi, {{Auth::user()->name}}</h2>

         <!-- Button trigger modal -->
                                 

  

                                    <!-- Modal -->
                                    <div class="modal fade" id="sliderModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" id="basicModalLabel" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                </button>
                                                <div id="carouselExampleIndicators" class="carousel slide p-5 bg-white" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class=" carousel-inner">
                                                        <div class="carousel-item active">
                                                        <h1>1/3</h1>
                                                            <h1>Update Profile</h1>
                                                           
                                                            <img class="d-block w-100" src="{{config('app.url')}}welcome_screen/update_profile.png" alt="First slide">
                                                            <a href="{{route('user.my_profile')}}" class="btn btn-primary shadow">Get Started</a>
                                                        </div>
                                                        <div class="carousel-item">
                                                        <h1>2/3</h1>
                                                        <h1>Purchase Mindigo Pack</h1>
                                                      
                                                            <img class="d-block w-100" src="{{config('app.url')}}welcome_screen/purchase.png" alt="Second slide">
                                                            <a href="{{route('user.mindigo_mart')}}" class="btn btn-primary shadow">Get Started</a>
                                                        </div>
                                                        <div class="carousel-item">
                                                        <h1>3/3</h1>
                                                        <h1>Begin your journey</h1>
                                                        <p>Promote your links. Share on Facebook, Instagram and Twitter</p>
                                                            <img class="d-block w-100" src="{{config('app.url')}}welcome_screen/promote.png" alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                        <span class="flaticon-left-arrow-1 carousel-control-prev-icon" aria-hidden="true"></span> 
                                                        <span class="carousel-control-prev-text"> Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-next-text"> Next</span>
                                                        <span class="flaticon-right-arrow-1 carousel-control-next-icon" aria-hidden="true"></span> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>


                                    <div class="text-center">
                                        <!-- Button trigger modal -->
                                        <!-- <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#exampleModalCenter">
                                          Unverified Mail
                                        </button> -->
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Email Verification Required !</h5>
                                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button> -->
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="modal-heading mb-4 mt-2">Please confirm email to continue</h4>
                                                        <p class="modal-text">Didnt get a mail? <a href="">Click here to resend confirmation mail</a></p>

                                                        <p class="modal-text">Already confirmed? <a href="">Click here to resolve</a></p>
                                                </div>
                                                <!-- <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

        <div class="row layout-top-spacing">



            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 layout-spacing">
                <div class="widget widget-one">
             

                    <div class="text-center">
                        <h3>{{count($direct_referrals)}}</h3>

                        <p>Total Referrals</p>
                    </div>
                    <div class="w-chart">
                   


                       
                    </div>
                        <div class="c text-center">
                        <h6 class="text-center font-weight-bold">Share Links</h6>
                            <a target="_blank" class="btn btn-primary btn-sm btn-bloc" href="https://www.facebook.com/sharer/sharer.php?u=https://app.mindigoglobal.com/affiliate/{{Auth::user()->user_code}}">facebook</a>
                            <a target="_blank" class="btn btn-info btn-sm btn-bloc" href="https://twitter.com/intent/tweet?url=https://app.mindigoglobal.com/affiliate/{{Auth::user()->user_code}}&text=Join us today">twitter</a>
                            <a target="_blank" class="btn btn-success btn-sm btn-bloc" href="https://wa.me/?text=Hello%20from%20Mindigoglobal%20Join%20us%20https://app.mindigoglobal.com/affiliate/{{Auth::user()->user_code}}">whatsapp</a>
                        </div>

                        <div class="c p-1 mt-3 d-flex justify-content-center">
                     
                            <a target="_blank" class="btn btn-outline-warning btn-sm btn-bloc" href="{{config('app.url')}}landingPage/{{Auth::user()->user_code}}">View Landing Page</a>
                        </div>

                        <div class="c p-1 mt-3 text-center">
                            <input type="text" class="form-control form-control-sm" value="{{config('app.url')}}affiliate/{{Auth::user()->user_code}}">
                            <br>
                            <button class="btn btn-warning btn-sm  text-center">copy</button>
                        </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h3 class="value">NGN <br>{{number_format($balance, 2)}}</h3>
                                <p class="">Wallet Balance</p>
                                <hr>

                                <h5 class="value">NGN <br>{{number_format($balance, 2)}}</h5>
                                <p class="">Latest Transaction</p>
                            </div>
    
                        </div>
                        <div class="pt-5 d-flex justify-content-center">
                            <a href="" class="btn btn-warning shadow text-center btn-sm">View Summary</a>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 layout-spacing">
                <div class="widget widget-account-invoice-two bg-warning">
                    <div class="widget-content ">


                            @if($my_order)

                            <div class="account-box ">
                                <div class="info">
                                    
                                    <h5>{{$my_order->pack_title}}</h5> <br>

                                
                                </div>
                                <div class="acc-action">
                                    <div class="">
                                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                                    </div>
                                    <a class="bg-dark" href="javascript:void(0);">{{Auth::user()->user_code}}</a>
                                </div>
                            </div>


                            @else

                                <h4 class="p-5 text-white">You have no package yet</h4>

                                <a class="btn btn-success" href="{{route('user.mindigo_mart')}}">PURCHASE NOW</a>


                            @endif
                    </div>
                </div>
            </div>

          

           

            <div class="col-md-4  layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h5 class="">Stairsteps</h5>
                    </div>
                    <div class="widget-content">
                        <div class="vistorsBrowser">
                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
                                </div>
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h6>CONNECTOR</h6>
                                        <p class="browser-count">0%</p>
                                    </div>
                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 0%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>CONSULTANT</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 0%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>SAPPHIRE</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>RUBY</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>EMERALD</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>DIAMOND</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>BLUE DIAMOND</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>BLACK DIAMOND</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>CROWN DIAMOND</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>CROWN AMBASSADOR</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            
                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>GLOBAL AMBASSADOR</h6>
                                        <p class="browser-count">0%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            


                            
                        </div>

                    </div>
                </div>
            </div>

           

            

            

            <div class="col-md-4  layout-spacing">
                <div class="widget widget-five">
                    <div class="widget-content">

                        <div class="header">
                            <div class="header-body">
                                <h6>All Accounts: 1</h6>
                              
                            </div>
                           
                        </div>

                        <div class="p-1">

                            <div class="card bg-dark">
                                <div class="card-body text-white">

                                <h6 class="text-white font-weight-bold">Account Code: {{Auth::user()->user_code}}</h6>
                                <h6 class="text-white font-weight-bold">Wallet Balance: NGN {{number_format($balance, 2)}}</h6>
                                
                                </div>
                            </div>

                        
                        
                        </div>



           

                        
                    </div>
                </div>

            </div>

            <div class="col-md-4  layout-spacing">
                <div class="widget widget-activity-three">

                    <div class="widget-heading">
                        <h5 class="">Notifications</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">

                                @forelse($notificationz as $notify)
                                
                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                    </div>

                                    

                                        
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>{{$notify->title}}</h5>
                                            <span class="">{{$notify->created_at->diffForHumans()}}</span>
                                        </div>
                                        <p>{{$notify->body}}</p>

                                    </div>

                                    </div>

                                    @empty


                                        <h6 class="text-center">No messages yet..</h6>



                                    @endforelse


                                

                                                                     
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>

            

           

        </div>

    </div>
    <!-- @verified

<script type="text/javascript">
    $(window).on('load', function() {
        $('#exampleModalCenter').modal('show');
    });
</script>

@endverified -->
    

    
@endsection  







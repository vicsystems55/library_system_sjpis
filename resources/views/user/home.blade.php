@extends('layouts.app')

<link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />  
      

@section('content')

    <div class="layout-px-spacing">


        <h2 class="mt-3 ">Hi, {{Auth::user()->name}}</h2>

         <!-- Button trigger modal -->
                                 

  


        <div class="row layout-top-spacing">



        

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h3 class="value">{{Auth::user()->user_code}}</h3>
                                <p class="">REF ID</p>
                                <hr>

                             
                            </div>
    
                        </div>
                        <div class="pt-5 d-flex justify-content-center">
                            <a href="" class="btn btn-warning shadow text-center btn-sm"></a>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                    </div>
                </div>
            </div>


           

            <div class="col-md-4  layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h5 class="">Statistics</h5>
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







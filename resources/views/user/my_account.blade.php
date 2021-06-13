@extends('layouts.app')

<link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />  

@section('content')

    <div class=" pt-5">



        <div class="row">

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing mx-auto">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                        <div class="w-info">
                                <h3 class="value">NGN <br> {{number_format($user_wallet->where('description', 'Direct Commission')->sum('amount'), 2)}}</h3>
                                <p class="">Referral Bonus</p>
                            </div>
                            <div class="">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 d-flex justify-content-center">
                            <a href="" class="btn btn-primary shadow text-center btn-sm">View Summary</a>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing mx-auto">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h3 class="value">NGN <br> {{number_format($user_wallet->where('description', 'Matching Bonus')->sum('amount'), 2)}}</h3>
                                <p class="">Matching Bonus</p>
                            </div>
                            <div class="">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 d-flex justify-content-center">
                            <a href="" class="btn btn-primary shadow text-center btn-sm">View Summary</a>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12 mx-auto">
                   
                   <div class="row ">
                       <div class="col-lg-12">
                           <div class="statbox widget box box-shadow">
                               <div class="widget-header">
                                   <div class="row">
                                       <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                       <h4>DIRECT REFERRALS</h4>
                                       </div>                  
                                   </div>
                               </div>
                               <div class="widget-content widget-content-area">
                                   <div class="table-responsive mb-4">
                                       <table id="column-filter" class="table">
                                           <thead>
                                               <tr>
                                                   
                                                   <th>Fullname</th>
                                                   <th>Member Code</th>
                                                  
                                                   <th>Status</th>
                                                   <th class="text-center">Commision</th>
                                               </tr>
                                           </thead>
                                           <tbody>

                                            @forelse($direct_referrals as $referral)

                                            <tr>
                                                 
                                                 <td>{{$referral->referrees->name}}</td>
                                                
                                                 <td>{{$referral->referree}}</td>
                                                 <td><span class="shadow-none badge badge-dark">pending</span></td>
                                                 <td class="text-center"><button class="btn btn-sm btn-outline-primary">NGN 5,000</button></td>
                                             </tr>



                                            @empty

                                            <div class="c">
                                                <h6 class="text-center font-weight-bold">Share Links</h6>
                                                    <a target="_blank" class="btn btn-primary btn-sm btn-bloc" href="https://www.facebook.com/sharer/sharer.php?u=https://app.mindigoglobal.com/affiliate/{{Auth::user()->user_code}}">facebook</a>
                                                    <a target="_blank" class="btn btn-info btn-sm btn-bloc" href="https://twitter.com/intent/tweet?url=https://app.mindigoglobal.com/affiliate/{{Auth::user()->user_code}}&text=Join us today">twitter</a>
                                                    <a target="_blank" class="btn btn-danger btn-sm btn-bloc" href="https://wa.me/?text=Hello%20from%20Mindigoglobal%20Join%20us%20https://app.mindigoglobal.com/affiliate/{{Auth::user()->user_code}}">whatsapp</a>
                                                </div>

                                       


                                            @endforelse


                                              
                                           </tbody>
                                           <tfoot>
                                               <tr>
                                                  
                                                   <th>Fullname</th>
                                                   <th>Member Code</th>
                                                   <th>Status</th>
                                                  
                                                   <th></th>
                                               </tr>
                                           </tfoot>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
           </div>

 

    </div>
    
@endsection  

<script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>
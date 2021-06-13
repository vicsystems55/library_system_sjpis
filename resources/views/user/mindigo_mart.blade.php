@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing mt-5">

       <h1 class="mt-3">Mindigo Market Place</h1>

       @if($my_order)

            <p class="alert alert-warning shadow col-md-6 mx-auto text-center font-weight-bol">
                YOU ALREADY HAVE AN ACCOUNT
            </p>


            @endif

       <div class="containr">
            <div id="pricingWrapper" class="row">



            @foreach($packs as $pack)

                <div class="col-md-4">
                    <div class="card stacked mt-5">
                        <div class="card-header pt-0">
                            <span style="width: 230px;" class="border-warning card-price">NGN {{number_format($pack->reg_fee)}}</span>
                            <h3 class="card-title mt-3 mb-1">{{$pack->title}}</h3>
                            <p>{{$pack->description}}</p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-minimal mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">Points: <span>{{$pack->points}}</span> 
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Direct Referral Commission: <span>{{$pack->dr_commission}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Matching Bonus: <span>{{$pack->match_bonus}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Maximum Daily Matching: <span>{{$pack->max_daily_matching}}</span> 
                                </li>


                            </ul>

                            <?php

                                $price = $pack->reg_fee * 485;

                            ?>
                                @if($my_order)

                                
                                <div class="c  d-flex justify-content-center">

                                <a href="" class="btn btn-secondary btn-lg" href="">Add An Account</a> 

                                </div>

                                @else


                                
                                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                   
                                            
                                   <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                   <input type="hidden" name="orderID" value="345">
                                   <input type="hidden" name="amount" value="{{$pack->reg_fee * 100}}"> {{-- required in kobo --}}
                                   <input type="hidden" name="quantity" value="1">
                                   <input type="hidden" name="currency" value="NGN">
                                   <input type="hidden" name="callback_url" value="{{config('app.url')}}user/process_order">
                                   <input type="hidden" name="metadata" value="{{ json_encode($array = 
                                       [
                                       'package' => $pack->title,
                                       'user_code' => Auth::user()->user_code,
                                       'user_id' => Auth::user()->id,
                                       'package_id' => $pack->id,
                                       
                                       
                                       ]
                                   
                                   ) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                   <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                   {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                   <p>
                                       <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                           <i class="fa fa-plus-circle fa-lg"></i> Purchase
                                       </button>
                                   </p>
                               
                                </form>



                                @endif
                        </div>
                        
                                <div class="c p-3 d-flex justify-content-center">
                                    <a href="{{route('offline_payment')}}" class="btn btn-warning btn-lg" href="">Offline Payments</a> 

                                </div>

                           
                    </div>
                </div>

                



            @endforeach

            <div class="col-md-6 {{$my_order?'d-block':'d-none'}}">

            <h3 class="text-center pb-5">{{$my_order?'Add Additional Accounts':'Create Multiple Accounts'}}</h3>

                <div class="row">
                    <div class="col-md-4">
                       <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                   
                                            
                                   <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                   <input type="hidden" name="orderID" value="345">
                                   <input type="hidden" name="amount" value="{{$pack->reg_fee * 200}}"> {{-- required in kobo --}}
                                   <input type="hidden" name="quantity" value="1">
                                   <input type="hidden" name="currency" value="NGN">
                                   <input type="hidden" name="callback_url" value="{{config('app.url')}}user/process_multiple_order">
                                   <input type="hidden" name="metadata" value="{{ json_encode($array = 
                                       [
                                       'package' => $pack->title,
                                       'user_code' => Auth::user()->user_code,
                                       'user_id' => Auth::user()->id,
                                       'package_id' => $pack->id,
                                       'number_of_accounts' => 2,
                                       
                                       
                                       ]
                                   
                                   ) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                   <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                   {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                   <p>
                                       <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                           2 Accounts
                                       </button>
                                   </p>
                               
                       </form>
                    </div>

                    <div class="col-md-4">
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                   
                                            
                                   <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                   <input type="hidden" name="orderID" value="345">
                                   <input type="hidden" name="amount" value="{{$pack->reg_fee * 600}}"> {{-- required in kobo --}}
                                   <input type="hidden" name="quantity" value="1">
                                   <input type="hidden" name="currency" value="NGN">
                                   <input type="hidden" name="callback_url" value="{{config('app.url')}}user/process_multiple_order">
                                   <input type="hidden" name="metadata" value="{{ json_encode($array = 
                                       [
                                       'package' => $pack->title,
                                       'user_code' => Auth::user()->user_code,
                                       'user_id' => Auth::user()->id,
                                       'package_id' => $pack->id,
                                       'number_of_accounts' => 6,
                                       
                                       ]
                                   
                                   ) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                   <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                   {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                   <p>
                                       <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                           6 Accounts
                                       </button>
                                   </p>
                               
                       </form>
                    </div>

                    <div class="col-md-4">
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                   
                                            
                                   <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                   <input type="hidden" name="orderID" value="345">
                                   <input type="hidden" name="amount" value="{{$pack->reg_fee * 1400}}"> {{-- required in kobo --}}
                                   <input type="hidden" name="quantity" value="1">
                                   <input type="hidden" name="currency" value="NGN">
                                   <input type="hidden" name="callback_url" value="{{config('app.url')}}user/process_multiple_order">
                                   <input type="hidden" name="metadata" value="{{ json_encode($array = 
                                       [
                                       'package' => $pack->title,
                                       'user_code' => Auth::user()->user_code,
                                       'user_id' => Auth::user()->id,
                                       'package_id' => $pack->id,
                                       'number_of_accounts' => 14,
                                       
                                       
                                       ]
                                   
                                   ) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                   <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                   {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                   <p>
                                       <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                           14 Accounts
                                       </button>
                                   </p>
                               
                        </form>
                    </div>

                    <div class="col-md-4">
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                   
                                            
                                   <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                   <input type="hidden" name="orderID" value="345">
                                   <input type="hidden" name="amount" value="{{$pack->reg_fee * 3000}}"> {{-- required in kobo --}}
                                   <input type="hidden" name="quantity" value="1">
                                   <input type="hidden" name="currency" value="NGN">
                                   <input type="hidden" name="callback_url" value="{{config('app.url')}}user/process_multiple_order">
                                   <input type="hidden" name="metadata" value="{{ json_encode($array = 
                                       [
                                       'package' => $pack->title,
                                       'user_code' => Auth::user()->user_code,
                                       'user_id' => Auth::user()->id,
                                       'package_id' => $pack->id,
                                        'number_of_accounts' => 30,
                                       
                                       ]
                                   
                                   ) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                   <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                   {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                   <p>
                                       <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                           30 Accounts
                                       </button>
                                   </p>
                                   
                               
                        </form>
                    </div>
        
                </div>
                                                
             
                                            
            </div>




            </div>
        </div>

    </div>
    
@endsection
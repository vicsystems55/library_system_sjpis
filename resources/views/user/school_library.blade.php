@extends('layouts.app')

@section('content')

            <div  class="layout-px-spacing">                
                    
                <div class="account-settings-container layout-top-spacing">


                

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">



                            <example-component avatar="{{config('app.url')}}avatars/{{Auth::user()->avatar??avatar.png}}"  user_name="{{Auth::user()->name}}"  user_id='{{Auth::user()->id}}' user_email='{{Auth::user()->email}}'></example-component>


                      



                            </div>
                        </div>
                    </div>

                   
                </div>

            </div>
@endsection

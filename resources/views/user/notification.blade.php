@extends('layouts.app')

@section('content')

<div class="layout-px-spacing p-0">

    <h2 class="mt-3 pt-5 pb-5">Notifications</h2>
            <div class="containe ">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area vertical-line-pill">
                            
                            <div class="row mb-4 mt-3">
                                <div class="col-sm-3 col-12">
                                    <div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto" id="v-line-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active mb-3" id="v-line-pills-home-tab" data-toggle="pill" href="#v-line-pills-home" role="tab" aria-controls="v-line-pills-home" aria-selected="true">Just in</a>
                                        <a class="nav-link mb-3  text-center" id="v-line-pills-profile-tab" data-toggle="pill" href="#v-line-pills-profile" role="tab" aria-controls="v-line-pills-profile" aria-selected="false">Unread</a>
                                        <a class="nav-link mb-3  text-center" id="v-line-pills-messages-tab" data-toggle="pill" href="#v-line-pills-messages" role="tab" aria-controls="v-line-pills-messages" aria-selected="false">Read</a>
                                        <a class="nav-link  text-center" id="v-line-pills-settings-tab" data-toggle="pill" href="#v-line-pills-settings" role="tab" aria-controls="v-line-pills-settings" aria-selected="false">Settings</a>
                                    </div>
                                </div>

                                <div class="col-sm-9 col-12">
                                    <div class="tab-content" id="v-line-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-line-pills-home" role="tabpanel" aria-labelledby="v-line-pills-home-tab">
                                        <h4 class="mb-4">We move your world!</h4>
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                        </p>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>                                            
                                        </div>
                                        <div class="tab-pane fade" id="v-line-pills-profile" role="tabpanel" aria-labelledby="v-line-pills-profile-tab">

                                        <div class="media">
                                            <img class="mr-3 rounded-circle" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Media heading</h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </div>
                                        </div>

                                        </div>
                                        <div class="tab-pane fade" id="v-line-pills-messages" role="tabpanel" aria-labelledby="v-line-pills-messages-tab">
                                        <p class="dropcap  dc-outline-primary">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        </div>
                                        <div class="tab-pane fade" id="v-line-pills-settings" role="tabpanel" aria-labelledby="v-line-pills-settings-tab">
                                        <blockquote class="blockquote">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        </blockquote>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection
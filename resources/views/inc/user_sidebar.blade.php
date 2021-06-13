@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

    
            
        <nav id="sidebar">
            <div class="shadow-bottom"></div>

            <ul class="list-unstyled menu-categories" id="accordionExample">
                
                @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )


                 
                  

                    <!-- <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.my_account')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>My Account</span>
                            </div>
                        </a>
                    </li> -->

                    <li class="menu {{ (request()->is('user')) ? 'active' : '' }}">
                        <a href="{{route('user.home')}}" data-active="{{ (request()->is('user')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.my_profile')}}" data-active="{{ (request()->is('user/my_profile')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>My Profile</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('user/my_account')) ? 'active' : '' }}">
                        <a href="{{route('user.my_account')}}" data-active="{{ (request()->is('user/my_account')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>My Earnings</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('user/genealogy')) ? 'active' : '' }}">
                        <a href="{{route('user.genealogy')}}" data-active="{{ (request()->is('user/genealogy')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Genealogy</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('user/mindigo_mart')) ? 'active' : '' }}">
                        <a href="{{route('user.mindigo_mart')}}" data-active="{{ (request()->is('user/mindigo_mart')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Mindigo Packages</span>
                            </div>
                        </a>
                    </li>

                    
                    <li class="menu {{ (request()->is('user/mindigo_resources')) ? 'active' : '' }}">
                        <a href="{{route('user.mindigo_resources')}}" data-active="{{ (request()->is('user/mindigo_resources')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Mindigo Training</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('user/notification')) ? 'active' : '' }}">
                        <a href="{{route('user.notification')}}" data-active="{{ (request()->is('user/notification')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Notifications</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('user/support')) ? 'active' : '' }}">
                        <a href="{{route('user.support')}}" data-active="{{ (request()->is('user/support')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Support</span>
                            </div>
                        </a>
                    </li>




                    

                   

              

                   

                 
                @else

                    
                
                @endif
                
            </ul>
            
        </nav>

    </div>
    <!--  END SIDEBAR  -->

@endif
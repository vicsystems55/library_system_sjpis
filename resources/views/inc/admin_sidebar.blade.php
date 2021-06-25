@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

    
            
        <nav id="sidebar">
            <div class="shadow-bottom"></div>

            <ul class="list-unstyled menu-categories " id="accordionExample">
                
                @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )

                <div class="c pt-2 text-center">
                    <img style="object-fit: cover;" width="120px;" height="120px;" class="rounded-circle shadow" src="{{asset('avatars')}}/{{Auth::user()->avatar}}" alt="avatar"> <br>
                    <br>
                    {{Auth::user()->user_code}} <br>

                    {{Auth::user()->name}}
                </div>
               
                

                    <li class="menu {{ (request()->is('admin')) ? 'active' : '' }} mt-2 pt-2">
                        <a href="{{route('admin.home')}}" data-active="{{ (request()->is('admin')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/library')) ? 'active' : '' }}">
                        <a href="{{route('admin.library')}}" data-active="{{ (request()->is('admin/library')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Manage Library</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/students')) ? 'active' : '' }}">
                        <a href="{{route('admin.students')}}"  data-active="{{ (request()->is('admin/mindigo_resources')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Manage Students</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/bookings')) ? 'active' : '' }}">
                        <a href="{{route('admin.bookings')}}"  data-active="{{ (request()->is('admin/mindigo_resources')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Manage Bookings</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/notifications')) ? 'active' : '' }}">
                        <a href="{{route('admin.notifications')}}"  data-active="{{ (request()->is('admin/notifications')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Notifications</span>
                            </div>
                        </a>
                    </li>
                    
                    <li class="menu {{ (request()->is('admin/settings')) ? 'active' : '' }}">
                        <a href="{{route('admin.settings')}}"  data-active="{{ (request()->is('admin/mindigo_resources')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Settings</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ (request()->is('admin/settings')) ? 'active' : '' }}">
                        <a href="{{route('logout')}}"  data-active="{{ (request()->is('admin/mindigo_resources')) ? 'true' : '' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Logout</span>
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
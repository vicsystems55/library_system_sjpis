@include('inc.function')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SJPIS</title>
    <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.ico')}}"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    @include('inc.styles')  

    <style>

     
  .tf-tree .tf-gap-lg{
  width: 80px;
  }

  
  .tf-tree{
  font-size: 8pt;
 

  }

  .tf-tree .card {
  padding-top: 5px;
  padding-bottom: 5px;
  font-size: 8pt;

  color: white;
  }


  .tf-nc:before,
  .tf-nc:after {
  /* css here */
  outline: 2px solid white;
  }



  li li:before {
  /* css here */

  outline: 2px solid white;
  }

</style>

</head>
<body {{ ($has_scrollspy) ? scrollspy($scrollspy_offset) : '' }} class=" {{ ($page_name === 'alt_menu') ? 'alt-menu' : '' }} {{ ($page_name === 'error404') ? 'error404 text-center' : '' }} {{ ($page_name === 'error500') ? 'error500 text-center' : '' }} {{ ($page_name === 'error503') ? 'error503 text-center' : '' }} {{ ($page_name === 'maintenence') ? 'maintanence text-center' : '' }}">
    
    <!-- BEGIN LOADER -->
    <div id="load_screen">
     <div class="loader"> 
     <div class="loader-content">
        <div class="spinner-grow align-self-center bg-warning"></div>
      </div>
     </div>
    </div>
    <!--  END LOADER -->

    @include('inc.navbar')
    
    <!--  BEGIN MAIN CONTAINER  -->
    <div >
         <div class="main-container" id="container-fluid">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            @auth()

                @if(Auth::user()->role == 'user')

                    @include('inc.user_sidebar')

                @elseif(Auth::user()->role == 'admin')

                    @include('inc.admin_sidebar')

                @endif

            @else

            @include('inc.sidebar')


            @endauth



            <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content p-0">
                    <div id="app">
                    @yield('content')
                    </div>
              

                @if ($page_name != 'account_settings')
                    @include('inc.footer')
                @endif
                
            </div>
            <!--  END CONTENT PART  -->

        </div>
    </div>
    <!-- END MAIN CONTAINER -->

    @include('inc.scripts')

    

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SJPIS </title>
    <link rel="icon" type="image/x-icon" href="{{config('app.url')}}assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{config('app.url')}}assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{config('app.url')}}assets/css/pages/error/style-500.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
</head>
<body class="error500 text-center">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
              
            </div>
        </div>
    </div>

    <div class="container-fluid error-content">
        <div class="">
           
            <p class="mini-text text-warning">Ooops!</p>
            <h1 class=" display-4 text-dark ">Session expired</h1>
            <a href="{{route('choose')}}" class="btn btn-warning mt-5">Go Back</a>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>
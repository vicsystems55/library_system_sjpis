@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing mt-5">

       <h1 class="mt-3">Offline Payments</h1>

        <div class="card col-md-6 mx-auto">
            <div class="card-body">
            <h4>
            Bank: GT Bank<br>
            Account Name: MindigoGlobal<br>
            Account Number: ##########<br>

            </h4>
            </div>
        </div>
       

       <div class="col-md-10">

        <div class="card">
            <div class="card-body">

            <form method="post" action="{{route('upload_payment_proof')}}">

            <div class="form-group">
                <label for="">Full name:</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">Amount:</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">User Code:</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">Number of Accounts</label>
                <input type="number" class="form-control" name="name">
            </div>



            </form>




            </div>
        </div>


       </div>





  

    </div>
    
@endsection
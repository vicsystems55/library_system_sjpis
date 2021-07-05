@extends('layouts.app')

@section('content')

            <div style="min-height: 520px"  class="container pt-5">                
                    
              <h3>Student Profile</h3>

      


              <div class="card col-md-10">
                  <div class="card-body">

                    <table class="table table-striped">
             

                        <tr>
                            <td>Fullname: </td>
                            <td class="font-weight-bold">{{$student->name}}</td>
                        </tr>

                        <tr>
                            <td>Admin. Number: </td>
                            <td class="font-weight-bold">{{$student->admin_no}}</td>
                        </tr>

                        <tr>
                            <td>Email: </td>
                            <td class="font-weight-bold">{{$student->email}}</td>
                        </tr>

                        <tr>
                            <td>Class: </td>
                            <td class="font-weight-bold">{{$student->class}}</td>
                        </tr>

                        <tr>
                            <td>Date Registered: </td>
                            <td class="font-weight-bold">{{\Carbon\Carbon::parse($student->created_at)->format('d M,Y')}}</td>
                        </tr>


                    </table>

                  </div>
              </div>


              <div class="card mt-5 col-md-10 table-reponsive">
                  <div class="card-body">

                    <h4>Booking History</h4>

                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Book</th>
                            <th>Date Borrowed</th>
                            <th>Date Returned</th>
                            <th>Status</th>
                        </tr>

                        {{-- <tr>
                            <td>1</td>
                            <td>Pirates Of The Carribean</td>
                            <td>2 Jul, 2020</td>
                            <td>2 Jul, 2020</td>
                            <td>
                                <span class="badge badge-primary">in session</span>
                            </td>
                        </tr> --}}
                        

                        <h6 class="text-center p-5">No books borowed for this student...</h6>
                    </table>

                  </div>
              </div>

            
              

            </div>
@endsection

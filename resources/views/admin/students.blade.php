@extends('layouts.app')

@section('content')

            <div style="min-height: 320px"  class="container pt-5">                
                    
              <h3>All Students</h3>

              <div class="p-2">
                <a href="{{route('admin.add_student')}}" class="btn btn-primary btn-lg">Add Student</a>
            </div>


              <div class="card">
                  <div class="card-body">

                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Fullname</th>
                            <th>School Email</th>
                            <th>Admin No.</th>
                            <th>Class</th>
                            <th>Detalis</th>
                        </tr>

                        @forelse($students_data as $student)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->admin_no}}</td>
                            <td>{{$student->class}}</td>
                            <td>
                                <a href="{{route('admin.single_student', $student->admin_no)}}" class="btn btn-primary btn-sm">
                                    view
                                </a>
                            </td>
                        </tr>


                        @empty

                        <h6 class="text-center mt-5">No records yet...</h6>
                        <a class="text-center btn btn-primary shadow" href="{{route('admin.add_student')}}">Add Record</a>

                        @endforelse
                    </table>

                  </div>
              </div>

            
              

            </div>
@endsection

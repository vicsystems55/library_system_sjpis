@extends('layouts.app')

@section('content')

            <div style="min-height: 320px"  class="container pt-5">                
                    
              <h3>All Students</h3>

              <div class="p-2">
                <a href="{{route('admin.add_book')}}" class="btn btn-primary btn-lg">Add Student</a>
            </div>


              <div class="card">
                  <div class="card-body">

                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Fullname</th>
                            <th>Admin No.</th>
                            <th>Class</th>
                            <th>Detalis</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>Victor Asuquo</td>
                            <td>SJA002</td>
                            <td>SSS 3</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">
                                    view
                                </a>
                            </td>
                        </tr>
                    </table>

                  </div>
              </div>

            
              

            </div>
@endsection

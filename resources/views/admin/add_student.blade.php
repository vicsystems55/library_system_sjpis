@extends('layouts.app')

@section('content')

            <div  class="container pt-5" style="min-height: 520px">                
                    
              

             
              <div class="card mb-3 col-md-10">
                  <div class="card-body">

                     <div class="col-md-6 mx-auto">

                        <h3>Add a student</h3>

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{$error}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endforeach
                        @endif

                        @if(Session::has('reg_msg'))
                        <p class="alert alert-info">{{ Session::get('reg_msg') }}</p>
                        <p class="alert alert-info text-center"><a class="btn btn-primary" href="{{route('admin.students')}}">view records</a></p>
                        
                        @endif



                        <form action="{{route('register_student')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Fullame" name="name">
                            </div>
                            {{-- <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email" name="email" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@sjpis.sch</span>
                                  </div>
                            </div> --}}
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Admission Number" name="admin_no">
                            </div>
                            <div class="form-group">
                                <select name="class" id="" class="form-control">
                                    <option value="">--Select Class--</option>
                                    <option value="JSS 1">JSS 1</option>
                                    <option value="JSS 2">JSS 2</option>
                                    <option value="JSS 3">JSS 3</option>
                                    <option value="SSS 1">SSS 1</option>
                                    <option value="SSS 2">SSS 2</option>
                                    <option value="SSS 3">SSS 3</option>
                                </select>
                            </div>

                       
                         

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                            </div>
                        </form>

                     </div>
                      
                     
                    
                    
                  </div>
              </div>

            

            </div>
@endsection

@extends('layouts.app')

@section('content')

            <div  class="container pt-5">                
                    
              

             
              <div class="card mb-3 col-md-10">
                  <div class="card-body">

                     <div class="col-md-6 mx-auto">

                        <h3>Add a book</h3>

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

                    @if(Session::has('book_msg'))
                    <p class="alert alert-info">{{ Session::get('book_msg') }}</p>
                    <p class="alert alert-info text-center"><a class="btn btn-primary" href="{{route('admin.students')}}">view records</a></p>
                    
                    @endif

                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Title" name="title">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Description" name="description">
                            </div>
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">JSS 1</option>
                                    <option value="">JSS 2</option>
                                    <option value="">JSS 3</option>
                                    <option value="">SSS 1</option>
                                    <option value="">SSS 2</option>
                                    <option value="">SSS 3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Author" name="author">
                            </div>

                            <div class="form-group">
                                <input type="number" step="1" min="1990" max="2022" class="form-control" placeholder="Year" name="year">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="ISBN" name="isbn">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Recommendation" name="recommendation">
                            </div>

                            <div class="custom-file mb-5">
                                <input type="file" name="book_cover" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Book cover</label>
                              </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>

                     </div>
                      
                     
                    
                    
                  </div>
              </div>

            

            </div>
@endsection

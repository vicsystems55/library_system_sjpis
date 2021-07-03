@extends('layouts.app')

@section('content')

            <div  class="container pt-5">                
                    
              

             
              <div class="card mb-3 col-md-10">
                  <div class="card-body">

                     <div class="col-md-6 mx-auto">

                        <h3>Add a book</h3>

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

                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>

                     </div>
                      
                     
                    
                    
                  </div>
              </div>

            

            </div>
@endsection

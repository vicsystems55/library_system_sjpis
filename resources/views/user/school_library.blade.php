@extends('layouts.app')

@section('content')

            <div  class="container pt-5">                
                    
              <h3>School Library</h3>
              <div class="card mb-3">
                  <div class="card-body">
                      <h4 class="text-center">Search Resources</h4>
                      <div class="form-group">
                          <input class="form-control col-md-10 mx-auto" type="text" name="" id="" placeholder="Enter search query">
                      </div>
                      <div class="text-center">
                        
                            <label for="">All</label>
                            <input type="checkbox">
                       
                            <label for="">Author</label>
                            <input type="checkbox">
                       

                            <label for="">Category</label>
                            <input type="checkbox">
      
                      </div>
                    
                      <div class="form-group text-center">
                        <button class="btn btn-primary col-md-6 btn-lg" type="submit">Search</button>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-3 mx-auto">
                      <div class="card">
                          <div class="card-body">
                              <h6>Title:</h6>
                              <h6>Description:</h6>
                          </div>
                          <div class="card-footer">
                              <a href="" class="btn btn-primary">View</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 mx-auto">
                      <div class="card">
                          <div class="card-body">
                            <h6>Title:</h6>
                            <h6>Description:</h6>
                          </div>
                          <div class="card-footer">
                              <a href="" class="btn btn-primary">View</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 mx-auto">
                      <div class="card">
                          <div class="card-body">
                            <h6>Title:</h6>
                            <h6>Description:</h6>
                          </div>
                          <div class="card-footer">
                              <a href="" class="btn btn-primary">View</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-3 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h6>Title:</h6>
                        </div>
                    </div>
                </div>
              </div>

            </div>
@endsection

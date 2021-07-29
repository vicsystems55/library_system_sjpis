@extends('layouts.app')

@section('content')

            <div  class="container pt-5">                
                    
              <h3>School Library</h3>

              <div class="p-2">
                  <a href="{{route('admin.add_book')}}" class="btn btn-primary btn-lg">Add Book</a>
              </div>
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

              <div class="row row-eq-height">

                @forelse($books as $book)

                    <div class="col-md-3 ">
                        <div class="card shadow" style="height: 450px;">
                            
                            <img id="previewImg" style="height: 230px; object-fit: cover;" src="{{config('app.url')}}book_covers/{{$book->book_cover}}"  >

                            <div class="card-body">
                              <h5 class="card-title">{{$book->title}}</h5>
                              <p class="card-text">{{{$book->description}}}</p>
                              
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary btn-block">More</a>
                            </div>
                          </div>
                    </div>


                @empty

               <div class="container p-5">
                <h4 class="text-center">No books yet..</h4>
                <div class="p-2 text-center">
                    <a href="{{route('admin.add_book')}}" class="btn btn-primary btn-lg">Add Book</a>
                </div>
               </div>


                @endforelse

                 
              </div>

            </div>
@endsection

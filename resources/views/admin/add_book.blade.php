@extends('layouts.app')

@section('content')

            <div  class="container pt-5">                
                    
              

             
              <div class="card mb-3 col-md-12">
                  <div class="card-body">

                     <div class="col-md-12 mx-auto">

                        <h3 class="p-5">Add a book</h3>

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
                    <p class="alert alert-info text-center"><a class="btn btn-primary" href="{{route('admin.library')}}">view records</a></p>
                    
                    @endif

                        <form action="{{route('add_book')}}" method="post" enctype='multipart/form-data'>

                            @csrf

                            <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Title" name="title">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Description" name="description">
                                            </div>
                                            <div class="form-group">
                                                <select name="category" id="" class="form-control">
                                                    <option value="JSS 1">JSS 1</option>
                                                    <option value="JSS 2">JSS 2</option>
                                                    <option value="JSS 3">JSS 3</option>
                                                    <option value="SS 1">SSS 1</option>
                                                    <option value="SS 2">SSS 2</option>
                                                    <option value="SS 3">SSS 3</option>
                                                </select>
                                            </div>
                
                                            <div class="form-group">
                                                <select name="type" id="" class="form-control">
                                                    <option value="physical">Physical Book</option>
                                                    <option value="ebook">E Book</option>
                                        
                                                </select>
                                            </div>
                
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Author" name="author">
                                            </div>

                                            <div class="form-group">
                                                <input type="number" step="1" min="1990" max="2022" class="form-control" placeholder="Year" name="year">
                                            </div>
                
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="ISBN" name="ISBN">
                                            </div>
                



                                        </div>


                                    <div class="col-md-6">


            
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Recommendation" name="recommendation">
                                            </div>

                                            <div class="form-group">
                                                <img id="previewImg" style="height: 230px; weight: 230px; object-fit: cover; border-radius: 20px;" class="shadow" src="{{config('app.url')}}book_covers/2.jpg" >

                                            </div> 
                                                
                                            <div class="custom-file mb-5 mt-3 ">
                                                <input onchange="previewFile4(this.id);" type="file" name="book_cover" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Book cover</label>
                                            </div>

                                    </div>
    



                                </div>
                         
                            

                           


                            <div class="form-group col-md-6 mx-auto text-center">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>

                     </div>
                      
                     
                    
                    
                  </div>
              </div>

            

            </div>


            <script>
                    function previewFile4(chooser){
                        console.log('hello');


                        var file = $('#' + chooser).get(0).files[0];

                    

                    

                        if(file){
                            var reader = new FileReader();

                            reader.onload = function(){
                                var previewer = chooser +'_preview';
                            
                                // $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                                $("#previewImg").attr("src", reader.result);
                                
                                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
                            }

                            reader.readAsDataURL(file);
                        }
                    }
            </script>
@endsection

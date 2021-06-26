@extends('layouts.app')

@section('content')

<div class="card col-md-10 mx-auto">
    <div class="card-body">
        <div class="info ">
                                            
                         <h6 class="">General Information</h6>
    
        
    
                        <div class="">
                        
                            <div class="upload mt-4 pr-md-4">
                                <label for="">Profile Picture</label>
                                <input type="file"  ref="file" id="file"   class="dropify"   data-max-file-size="5M" />
                                
                            </div>
                        </div>
                        <div class=" mt-md-0 mt-4">
                            <div class="form">
                                <div class="row">
    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name"  readonly>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="fullName">Email</label>
                                            <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name"  readonly>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-6">
                                    <label for="">Gender </label>
                                        <div class="form-group ">
                                        
                                            <div class="custom-control custom-radio custom-control">
                                                <input type="radio" id="customRadioInline1" v-model="gender" value="male" class="custom-control-input" >
                                                <label class="custom-control-label" for="customRadioInline1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control">
                                                <input type="radio" id="customRadioInline2" v-model="gender" value="female" class="custom-control-input" >
                                                <label class="custom-control-label" for="customRadioInline2">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="profession">Bio</label>
                                    <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" v-model="bio" >
                                </div>
                            
                            </div>
                            
                        </div>
        
           
                        
                        
                    
                            <div class="">
                                <div class="">
                                    <label for="location">Address</label>
                                    <input type="text" class="form-control mb-4" id="location" v-model="address" placeholder="Enter address">
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control mb-4" v-model="phone" placeholder="Write your phone number here" >
                                </div>
                            </div>
    
                     
    
    
    
    </div>
    </div>
</div>
@endsection

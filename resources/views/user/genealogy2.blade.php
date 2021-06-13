@extends('layouts.app')


@section('content')

<link href="{{asset('assets/css/elements/miscellaneous.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/elements/breadcrumb.css')}}" rel="stylesheet" type="text/css" />
        
    <link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />  
      
<link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


  

<?php


try {
    //code...

   

    if ($result[0]->position == 'L') {
        # code...

        $_11 = $result[0]->user_code??'Empty';
        $_12 = $result[1]->user_code??'Empty';

        $_11_id = $result[0]->user_id??'Empty';
        $_12_id = $result[1]->user_id??'Empty';

        $_11_name = $result[0]->users->name??'null';
        $_12_name = $result[1]->users->name??'null';

        $_11_color = 'success';
        $_12_color = 'warning';


        


    }

    elseif($result[0]->position =='R'){
        
        $_11 = $result[1]->user_code??'Empty';
        $_12 = $result[0]->user_code??'Empty';
        
        $_11_id = $result[1]->user_id??'Empty';
        $_12_id = $result[0]->user_id??'Empty';

        $_11_name = $result[1]->users->name??'null';
        $_12_name = $result[0]->users->name??'null';


        $_11_color = 'success';
        $_12_color = 'success';

    }
  } catch (\Throwable $th) {
    //throw $th;

    $_11 = "Empty";
    $_12 = "Empty";

    $_11_color = 'warning';
    $_12_color = 'warning';

    $_11_name = 'null';
    $_12_name = 'null';

    $_11_id = 'null';
    $_12_id = 'null';
   
  }


?>



    <div class="layout-px-spacing">

       <h3 class="mt-3">Genealogy Tree</h3>

       <div class="card col-md-6 mx-auto">
    <div class="card-body text-center">

    <a href="{{ url()->previous()}}" class="btn btn-primary">Go Back</a>

        <!-- @if(session()->has('node_message'))
            <div class="alert alert-success">
                {{ session()->get('node_message') }}
            </div>
        @endif

        @if($errors->any())
            @foreach ($errors->all() as $error)
            <p class="alert alert-warning">{{ $error }}</p>
            @endforeach
        @endif -->


   
    </div>
</div>



<!-- <div class="card col-md-6 mx-auto">
    <div class="card-body">

        @if(session()->has('b_message'))
            <div class="alert alert-success">
                {{ session()->get('b_message') }}
            </div>
        @endif

        @if($errors->any())
            @foreach ($errors->all() as $error)
            <p class="alert alert-warning">{{ $error }}</p>
            @endforeach
        @endif



    </div>
</div> -->


    
    <div class="modal fade bd-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="parent_code_title">Add new node</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="">

                        @csrf

                            <div class="form-group text-center">
                                <label >Parent Node</label>
                                <input id="parent_code" name="parent" value="new" type="text" class="form-control" readonly>
                            </div> 

                            <div class="form-group text-center">
                                <label for="">Position</label>
                                    <select name="user_code" id="legs" class="form-control">
                                    
                                      

                                    </select>
                            </div>

                            <div class="form-group text-center">
                                <label for="">My Referrals</label>
                                    <select name="user_code" id="" class="form-control">
                                    
                                        <option value="">Select an account</option>

                                        @forelse($direct_referrals as $referral)

                                        <option class="font-weight-bold" value="{{$referral->referree}}">
                                        
                                        {{$referral->referree}} 

                                        [{{$referral->referrees->name}}]
                                        
                                        </option>

                                        @empty

                                        <option value="">NO Refferals Yet</option>

                                        @endforelse

                                    </select>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-danger  btn-block">Create Node</button>
                            </div> 

                            <div class="form-group text-center">
                            <a id="myAnchor" href="" class="btn btn-outline-danger  btn-block">View Node</a>
                            </div> 
                    </form>

                </div>
                <!-- <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> View</button>
                    <button type="button" class="btn btn-primary">Create Node</button>
                </div> -->
            </div>
        </div>
    </div>


<div class="top mt-5">
      <div class="tf-tree ">
              <ul>
                <li>
                  <span 
                  data-toggle="tooltip" data-placement="top" title="{{$parent->users->name??'Empty'}}"
                     class=" bg-{{$parent->status??'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto" >
                  
                  {{$parent->user_code??'Empty'}}
                
                  
                  </span>
                  <ul>
                    <li>
                      <span

                      data-toggle="tooltip" data-placement="top" title="{{$_11_name}}"

                        style="" class="border bg-{{$_11!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                      
                      <span onclick="clickedNode(this.id)" id="user_code">{{$_11}}</span>

                      <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_11)}}">view</a>  -->

                      <?php

                        try {
                          //code...
                          $_11node = App\BinaryTree::where('user_id', $_11_id)->first();

                        $_11children = $_11node->children;

                      

                        } catch (\Throwable $th) {
                          //throw $th;
                        }

                      

                        try {
                          //code...
                          if($_11children[0]->position == 'L'){

                            $_21 = $_11children[0]->user_code??'Empty';
                            $_22 = $_11children[1]->user_code??'Empty';

                            $_21_id = $_11children[0]->user_id??'Empty';
                            $_22_id = $_11children[1]->user_id??'Empty';

                            $_21_name = $_11children[0]->users->name??'null';
                            $_22_name = $_11children[1]->users->name??'null';

                            $_21_color = 'success';
                            $_22_color = 'warning';


                          }elseif($_11children[0]->position == 'R'){

                            
              
                            $_21 = $_11children[1]->user_code??'Empty';
                            $_22 = $_11children[0]->user_code??'Empty';
                            
                            $_21_id = $_11children[1]->user_id??'Empty';
                            $_22_id = $_11children[0]->user_id??'Empty';
                    
                            $_21_name = $_11children[1]->users->name??'null';
                            $_22_name = $_11children[0]->users->name??'null';
                    
                    
                            $_21_color = 'success';
                            $_22_color = 'success';

                            
                    
                        }

                        } catch (\Throwable $th) {
                          //throw $th;
                          $_21 = "Empty";
                          $_22 = "Empty";

                          $_21_color = 'warning';
                          $_22_color = 'warning';

                          $_21_name = 'null';
                          $_22_name = 'null';

                          $_21_id = 'null';
                          $_22_id = 'null';
                        }



                      ?>


                    
                      
                      </span>
                      <ul>
                          <li>
                              <span  

                              data-toggle="tooltip" data-placement="top" title="{{$_21_name}}"

                              style="" class="border bg-{{$_21!='Empty'?'success':'warning'}} card  tf-nc tf-gap-lg shadow text-center mx-auto">
                              
                              
                              <span onclick="clickedNode(this.id)" id="user_code">{{$_21}}</span>

                              <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_21)}}">view</a>  -->

                                <?php

                                        try {
                                          
                                          $_21node = App\BinaryTree::where('user_id', $_21_id)->first();

                                        $_21children = $_21node->children;
                                        } catch (\Throwable $th) {
                                          //throw $th;
                                        }





                                        try {
                                          //code...
                                          
                                          if($_21children[0]->position == 'L'){
                                            

                                            $_31 = $_21children[0]->user_code??'Empty';
                                            $_32 = $_21children[1]->user_code??'Empty';

                                            $_31_id = $_21children[0]->user_id??'Empty';
                                            $_32_id = $_12children[1]->user_id??'Empty';

                                            $_31_name = $_21children[0]->users->name??'null';
                                            $_32_name = $_21children[1]->users->name??'null';

                                            $_31_color = 'success';
                                            $_32_color = 'warning';


                                          }elseif($_21children[0]->position =='R'){
                                            
                                            $_31 = $_21children[1]->user_code??'Empty';
                                            $_32 = $_12children[0]->user_code??'Empty';
                                            
                                            $_31_id = $_21children[1]->user_id??'Empty';
                                            $_32_id = $_21children[0]->user_id??'Empty';

                                            $_31_name = $_21children[1]->users->name??'null';
                                            $_32_name = $_21children[0]->users->name??'null';


                                            $_31_color = 'success';
                                            $_32_color = 'success';

                                        }

                                        } catch (\Throwable $th) {
                                          //throw $th;
                                          $_31 = "Empty";
                                          $_32 = "Empty";

                                          $_31_color = 'warning';
                                          $_32_color = 'warning';

                                          $_31_name = 'null';
                                          $_32_name = 'null';

                                          $_31_id = 'null';
                                          $_32_id = 'null';
                                        }



                                ?>
                            
                              
                              </span>

                                
                                  
                                  
                                

                              <ul>
                                  <li><span 

                                  data-toggle="tooltip" data-placement="top" title="{{$_31_name}}"

                                    style="" class="border  bg-{{$_31!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                                  
                                  <span onclick="clickedNode(this.id)" id="user_code">{{$_31}}</span>

                                  <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_31)}}">view</a>  -->

                                  
                                  
                                  
                                  
                                  </span></li>
                                  <li><span 
                                  
                                  data-toggle="tooltip" data-placement="top" title="{{$_32_name}}"

                                    style="" class="border  bg-{{$_32!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                                  
                                  <span onclick="clickedNode(this.id)" id="user_code">{{$_32}}</span>

                                  <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_32)}}">view</a>  -->
                                  
                                  
                                  
                                  </span></li>
                                </ul>
                          
                          </li>
                          <li>
                              <span  

                              data-toggle="tooltip" data-placement="top" title="{{$_22_name}}"

                              style="" class="border bg-{{$_22!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                              
                              
                              <span onclick="clickedNode(this.id)" id="user_code">{{$_22}}</span>

                              <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_22)}}">view</a>  -->

                                <?php

                                    try {
                                      
                                      $_22node = App\BinaryTree::where('user_id', $_22_id)->first();

                                    $_22children = $_22node->children;
                                    } catch (\Throwable $th) {
                                      //throw $th;
                                    }





                                    try {
                                      //code...
                                      
                                      if($_22children[0]->position == 'L'){
                                        

                                        $_33 = $_22children[0]->user_code??'Empty';
                                        $_34 = $_22children[1]->user_code??'Empty';

                                        $_33_id = $_22children[0]->user_id??'Empty';
                                        $_34_id = $_22children[1]->user_id??'Empty';

                                        $_33_name = $_22children[0]->users->name??'null';
                                        $_34_name = $_22children[1]->users->name??'null';

                                        $_33_color = 'success';
                                        $_34_color = 'warning';


                                      }elseif($_22children[0]->position =='R'){
                                        
                                        $_33 = $_22children[1]->user_code??'Empty';
                                        $_34 = $_22children[0]->user_code??'Empty';
                                        
                                        $_33_id = $_22children[1]->user_id??'Empty';
                                        $_34_id = $_22children[0]->user_id??'Empty';

                                        $_33_name = $_22children[1]->users->name??'null';
                                        $_34_name = $_22children[0]->users->name??'null';


                                        $_33_color = 'success';
                                        $_34_color = 'success';

                                    }

                                    } catch (\Throwable $th) {
                                      //throw $th;
                                      $_33 = "Empty";
                                      $_34 = "Empty";

                                      $_33_color = 'warning';
                                      $_34_color = 'warning';

                                      $_33_name = 'null';
                                      $_34_name = 'null';

                                      $_33_id = 'null';
                                      $_34_id = 'null';
                                    }



                                ?>
                            
                              
                              </span>
                              <ul>
                                  <li><span 

                                  data-toggle="tooltip" data-placement="top" title="{{$_33_name}}"

                                    style="" class="border bg-{{$_33!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                                  
                                  <span onclick="clickedNode(this.id)" id="user_code">{{$_33}}</span>

                                  <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_33)}}">view</a>  -->
                                  
                                  
                                  </span></li>
                                  <li><span  
                                  
                                  data-toggle="tooltip" data-placement="top" title="{{$_34_name}}"

                                  style="" class="border bg-{{$_34!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                                  
                                  <span onclick="clickedNode(this.id)" id="user_code">{{$_34}}</span>

                                  <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_34)}}">view</a>  -->
                                  
                                  
                                  </span></li>
                                </ul>
                          
                          </li>
                        </ul>
                    
                    </li>
                    <li>
                      <span  
                      
                      data-toggle="tooltip" data-placement="top" title="{{$_12_name}}"
                      
                        style="" class="border bg-{{$_12!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                      
                      <span onclick="clickedNode(this.id)" id="user_code">{{$_12}}</span>

                      <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_12)}}">view</a>  -->

                      <?php

                          try {
                            
                            $_12node = App\BinaryTree::where('user_id', $_12_id)->first();

                          $_12children = $_12node->children;
                          } catch (\Throwable $th) {
                            //throw $th;
                          }

                          



                          try {
                            //code...
                            
                            if($_12children[0]->position == 'L'){
                              

                              $_23 = $_12children[0]->user_code??'Empty';
                              $_24 = $_12children[1]->user_code??'Empty';

                              $_23_id = $_12children[0]->user_id??'Empty';
                              $_24_id = $_12children[1]->user_id??'Empty';

                              $_23_name = $_12children[0]->users->name??'null';
                              $_24_name = $_12children[1]->users->name??'null';

                              $_23_color = 'success';
                              $_24_color = 'warning';


                            }elseif($_12children[0]->position =='R'){
                              
                              $_23 = $_12children[1]->user_code??'Empty';
                              $_24 = $_12children[0]->user_code??'Empty';
                              
                              $_23_id = $_12children[1]->user_id??'Empty';
                              $_24_id = $_12children[0]->user_id??'Empty';

                              $_23_name = $_12children[1]->users->name??'null';
                              $_24_name = $_12children[0]->users->name??'null';


                              $_23_color = 'success';
                              $_24_color = 'success';

                          }

                          } catch (\Throwable $th) {
                            //throw $th;
                            $_23 = "Empty";
                            $_24 = "Empty";

                            $_23_color = 'warning';
                            $_24_color = 'warning';

                            $_23_name = 'null';
                            $_24_name = 'null';

                            $_23_id = 'null';
                            $_24_id = 'null';
                          }



                          ?>

                      
                      
                      </span>
                      <ul>
                        <li>
                            <span   

                            data-toggle="tooltip" data-placement="top" title="{{$_23_name}}"

                            style="" class="border bg-{{$_23!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                            
                            
                            <span onclick="clickedNode(this.id)" id="user_code">{{$_23}}</span>

                            <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_23)}}">view</a>  -->

                            <?php

                                try {
                                  
                                  $_23node = App\BinaryTree::where('user_id', $_23_id)->first();

                                $_23children = $_23node->children;
                                } catch (\Throwable $th) {
                                  //throw $th;
                                }





                                try {
                                  //code...
                                  
                                  if($_23children[0]->position == 'L'){
                                    

                                    $_35 = $_23children[0]->user_code??'Empty';
                                    $_36 = $_23children[1]->user_code??'Empty';

                                    $_35_id = $_23children[0]->user_id??'Empty';
                                    $_36_id = $_23children[1]->user_id??'Empty';

                                    $_35_name = $_23children[0]->users->name??'null';
                                    $_36_name = $_23children[1]->users->name??'null';

                                    $_35_color = 'success';
                                    $_36_color = 'warning';


                                  }elseif($_23children[0]->position =='R'){
                                    
                                    $_35 = $_23children[1]->user_code??'Empty';
                                    $_36 = $_23children[0]->user_code??'Empty';
                                    
                                    $_35_id = $_23children[1]->user_id??'Empty';
                                    $_36_id = $_23children[0]->user_id??'Empty';

                                    $_35_name = $_23children[1]->users->name??'null';
                                    $_36_name = $_23children[0]->users->name??'null';


                                    $_35_color = 'success';
                                    $_36_color = 'success';

                                }

                                } catch (\Throwable $th) {
                                  //throw $th;
                                  $_35 = "Empty";
                                  $_36 = "Empty";

                                  $_35_color = 'warning';
                                  $_36_color = 'warning';

                                  $_35_name = 'null';
                                  $_36_name = 'null';

                                  $_35_id = 'null';
                                  $_36_id = 'null';
                                }



                                ?>
                            
                            
                            </span>
                            <ul>
                              <li><span  

                              data-toggle="tooltip" data-placement="top" title="{{$_35_name}}"
                              
                              style="" class="border bg-{{$_35!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                              
                              <span onclick="clickedNode(this.id)" id="user_code">{{$_35}}</span>

                              <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_35)}}">view</a>  -->
                              
                              
                              </span></li>
                              <li><span  
                              
                              data-toggle="tooltip" data-placement="top" title="{{$_36_name}}"

                              style="" class="border bg-{{$_36!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                              
                              <span onclick="clickedNode(this.id)" id="user_code">{{$_36}}</span>

                              <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_36)}}">view</a>  -->
                              
                              
                              </span></li>
                            </ul>
                          </li>
                        <li>
                            <span   
                            data-toggle="tooltip" data-placement="top" title="{{$_24_name}}"
                            style="" class="border bg-{{$_24!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                            
                          
                          <span onclick="clickedNode(this.id)" id="user_code">{{$_24}}</span>

                            <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_24)}}">view</a>  -->

                            <?php

                                      try {
                                        
                                        $_24node = App\BinaryTree::where('user_id', $_24_id)->first();

                                      $_24children = $_24node->children;
                                      } catch (\Throwable $th) {
                                        //throw $th;
                                      }





                                      try {
                                        //code...
                                        
                                        if($_24children[0]->position == 'L'){
                                          

                                          $_37 = $_24children[0]->user_code??'Empty';
                                          $_38 = $_24children[1]->user_code??'Empty';

                                          $_37_id = $_24children[0]->user_id??'Empty';
                                          $_38_id = $_24children[1]->user_id??'Empty';

                                          $_37_name = $_24children[0]->users->name??'null';
                                          $_38_name = $_24children[1]->users->name??'null';

                                          $_37_color = 'success';
                                          $_38_color = 'warning';


                                        }elseif($_24children[0]->position =='R'){
                                          
                                          $_37 = $_24children[1]->user_code??'Empty';
                                          $_38 = $_24children[0]->user_code??'Empty';
                                          
                                          $_37_id = $_24children[1]->user_id??'Empty';
                                          $_38_id = $_24children[0]->user_id??'Empty';

                                          $_37_name = $_24children[1]->users->name??'null';
                                          $_38_name = $_24children[0]->users->name??'null';


                                          $_37_color = 'success';
                                          $_38_color = 'success';

                                      }

                                      } catch (\Throwable $th) {
                                        //throw $th;
                                        $_37 = "Empty";
                                        $_38 = "Empty";

                                        $_37_color = 'warning';
                                        $_38_color = 'warning';

                                        $_37_name = 'null';
                                        $_38_name = 'null';

                                        $_37_id = 'null';
                                        $_38_id = 'null';
                                      }



                                ?>
                          
                            
                            </span>
                            <ul>
                              <li><span  

                              data-toggle="tooltip" data-placement="top" title="{{$_37_name}}"

                              style="" class="border bg-{{$_37!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">
                              
                              <span onclick="clickedNode(this.id)" id="user_code">{{$_37}}</span>

                              <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_37)}}">view</a>  -->
                              
                              
                              </span></li>
                              <li><span  
                              
                              data-toggle="tooltip" data-placement="top" title="{{$_38_name}}"

                              style="" class="border bg-{{$_38!='Empty'?'success':'warning'}} card tf-nc tf-gap-lg shadow text-center mx-auto">

                              <span onclick="clickedNode(this.id)" id="user_code">{{$_38}}</span>
                              <!-- <br>
                              <a class="text-white font-weight-bold" href="{{route('user.genealogy2', $_38)}}">view</a>  -->
                              
                              
                              </span></li>
                            </ul>
                          </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
      </div>
</div>



        <div class="text-center">
        
            <button type="button" id="launch_modal" class="d-none btn btn-primary btn-sm mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-sm">Add A Node</button>
        </div>
<a target="_blank" href="{{route('user.genealogy2', 123)}}"> </a>
<br>

<div class="row">
                <div class="col-md-6">
                    
                         <div class="row layout-spacing layout-top-spacing">
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>LEFT GROUPS</h4>
                                            <h4>Total Points: {{$left_groups->sum('referree_points')}}</h4>
                                            </div>                  
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="table-responsive mb-4">
                                            <table id="column-filter" class="table">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Fullname</th>
                                                        <th>Member Code</th>
                                                        <th>Points</th>
                                                       
                                                        <th>Status</th>
                                                        <!-- <th class="text-center">Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                
                                                @forelse($left_groups as $left_group)

                                                <tr>
                                                      
                                                      <td>{{$left_group->referrees->name}}</td>
                                                     
                                                      <td>{{$left_group->referree}}</td>
                                                      <td>{{$left_group->referree_points}}</td>
                                                      <td><span class="shadow-none badge badge-primary">Approved</span></td>
                                                      <!-- <td class="text-center"><button class="btn btn-sm btn-outline-primary">Copy</button></td> -->
                                                  </tr>


                                                @empty

                                                <tr>
                                                
                                                  <td>No Referrals yet...</td>
                                                </tr>


                                                @endforelse    

                                                   
                                                </tbody>
                                                <tfoot>
                                            
                                                    <tr>
                                                       
                                                        <th>Fullname</th>
                                                        <th>Member Code</th>
                                                        <th>Status</th>
                                                       
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                   
                        <div class="row layout-spacing layout-top-spacing">
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>RIGHT GROUPS</h4>

                                            <h4>Total Points: {{$right_groups->sum('referree_points')}}</h4>
                                            </div>                  
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="table-responsive mb-4">
                                            <table id="column-filter" class="table">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Fullname</th>
                                                        <th>Member Code</th>
                                                        <th>Points</th>
                                                       
                                                        <th>Status</th>
                                                        <!-- <th class="text-center">Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($right_groups as $right_group)

                                                    <tr>
                                                          
                                                    <td>{{$right_group->referrees->name}}</td>
                                                        
                                                          <td>{{$right_group->referree}}</td>
                                                          <td>{{$right_group->referree_points}}</td>
                                                          <td><span class="shadow-none badge badge-primary">Approved</span></td>
                                                          <!-- <td class="text-center"><button class="btn btn-sm btn-outline-primary">Copy</button></td> -->
                                                      </tr>


                                                    @empty

                                                    <tr>

                                                      <td>No Referrals yet...</td>
                                                    </tr>


                                                    @endforelse   
                                                   
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                       
                                                        <th>Fullname</th>
                                                        <th>Member Code</th>
                                                        <th>Status</th>
                                                       
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

    </div>


    
@endsection

<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
<script src="{{asset('plugins/table/datatable/custom_miscellaneous.js')}}"></script>

<script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>


    <script>
    

        function clickedNode(data) {

          var msg = document.getElementById(data).textContent;

          document.getElementById('parent_code').value=msg;

          document.getElementById('parent_code_title').textContent=msg;

          $.ajax({

              url: "{{config('app.url')}}user/check_legs/" + msg,
              headers: {  'Access-Control-Allow-Origin': '*' },
              type: 'GET',
              success: function(res) {

                  console.log(res);

                  if(res == '00'){
                      console.log('empty empty');

                      $('#legs').empty();

                      $('#legs').append($('<option>', {
                          value: 'L',
                          text: 'left'
                      }));

                      $('#legs').append($('<option>', {
                          value: 'R',
                          text: 'right'
                      }));

                      $('#btnSubmit').removeAttr("disabled");
                  }


                  if(res == '01'){
                    
                      console.log('1 empty');
                      $('#legs').empty();
                      $('#legs').append($('<option>', {
                          value: 'L',
                          text: 'left'
                      }));

                      $('#btnSubmit').removeAttr("disabled");
                  }


                  if(res == '10'){
                      console.log('empty 1');
                      $('#legs').empty();
                      $('#legs').append($('<option>', {
                          value: 'R',
                          text: 'right'
                      }));

                      $('#btnSubmit').removeAttr("disabled");
                  }

                  if(res == '11'){

                      console.log('empty 1');
                      $('#legs').empty();
                      $('#legs').append($('<option>', {
                          value: '',
                          text: 'this node is full'
                      }));
                    
                  }

                  if(res == null){

                    console.log('empty 1');
                    $('#legs').empty();
                    $('#legs').append($('<option>', {
                        value: '',
                        text: 'Node has not been placed'
                    }));

                    }
                  
              }
              });

          $('.bd-example-modal-sm1').modal();

        
        }
     
        
        
    </script>
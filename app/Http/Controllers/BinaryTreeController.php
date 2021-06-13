<?php

namespace App\Http\Controllers;

use App\BinaryTree;
use App\User;
use App\Order;
use App\DirectReferral;
use Auth;
use Illuminate\Http\Request;

class BinaryTreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function initialize(Request $request)
    {

       

        $validatedData = $request->validate([
                   
            'user_code' => 'unique:binary_trees,user_code','exists:users,user_code',
     
        ]);

        $user_data = User::where('user_code', $request->user_code)->first();

       $my_order = Order::where('user_id', $user_data->id)->first();
        //
        $position = 'L';
        $legs = '00';

        $binaryTree = BinaryTree::create([
            'user_id' => $user_data->id,
            'user_code' => $request->user_code,
            'position' => $position,  
            'legs' => $legs,        
            'pack_name' => $my_order->package,
            'pack_id' => $my_order->pack_id,
        ]);

        // $node = BinaryTree::find($binaryTree->id);

        // $node = new BinaryTree( $binaryTree->toArray());

        $binaryTree->saveAsRoot();


        // BinaryTree::fixTree();

        return back()->with('node_message','Node Initialized');

    }


    public function getChildren($id)
    {
        # code...

        $node = BinaryTree::find($id);

        return $node->descendants;


    }


    public function add_node(Request $request)
   
    {

        //
        // check if he is a direct referree

        $my_guy = DirectReferral::where('referrer_id', Auth::user()->id)->where('referree', $request->user_code)->first();

        
        if ($my_guy) {
            # code...

            $validatedData = $request->validate([
                   
                'user_code' => 'unique:binary_trees,user_code','exists:orders,sponsors_id',
                'user_id' => 'unique:binary_trees,user_id',
            ]);

           


                
            $parent = BinaryTree::where('user_code', $request->parent)->first();

            $parent_id = $parent->id;

            

            $parent_data = BinaryTree::where('user_code', $request->parent)->first();



            $node = BinaryTree::find($parent_data->id);

            // $node = new BinaryTree($node);

            // dd($node->children->count());

            // return $node->children->count();


    
          
    
            //get user data for user code
    
            $user_data = User::where('user_code', $request->user_code)->first();
    
            //look for user code order data
    
            $user_order = Order::where('sponsors_id', $user_data->user_code)->first();
    
            //if left and right are full
    
            if ($node->children()->count() <= 1 ) {
                # code...
                $binaryTree = BinaryTree::create([
                    'user_id' => $user_data->id,
                    'user_code' => $request->user_code,
                    'position' => $request->position,        
                    'pack_name' => $user_order->pack_title,
                    'pack_id' => $user_order->pack_id,
                ]);

                $binaryTree = BinaryTree::find($binaryTree->id);

                // BinaryTree::fixTree();
        
                $node->appendNode($binaryTree);
    
                $referree_data = DirectReferral::where('referree', $request->user_code)->update([
                    'position' => $request->position
                ]);
    
                    //update legs information
    
                if ($request->position == 'L') {
                    # code...
                    $node2 = BinaryTree::where('id',$parent_id)->update([
                        'legs' => '10',
                    ]);
                }
                //update legs information
                if ($request->position == 'R') {
                    # code...
                    $node2 = BinaryTree::where('id',$parent_id)->update([
                        'legs' => '01',
                    ]);
                }
    
                // $node = BinaryTree::find($parent_id);
    
                if ($node->children()->count() > 1 ) {
                    $node2 = BinaryTree::where('id',$parent_id)->update([
                        'legs' => '11',
                    ]);
                }
    
                // $result = BinaryTree::descendantsAndSelf($node->id);
    
                // $new_node = BinaryTree::find($binaryTree->id);
    
    
    
                // $my_tree = Genealogy::Create([
                //     'owner_id' => Auth::user()->id,
                //     'parent' => $request->parent,
                //     'user_id' => $new_node->id,
                //     'user_code' => $new_node->user_code,
                //     'postion' => $new_node->postion,        
                //     'package_name' => $new_node->package_title,
                //     'package_id' => $new_node->package_id,
                // ]);



                                // try block

                //record entry in matching_bonus  table

                //check for the first children of user from auth::

                    

                //classify accordingly left or right

                //get descendants of left_group


                //get descendants of right_group

                //if node added is descendant of left_group
                //add into left id column with respective points

                



                //else if node add is descendant of right_group

                //add into right id column with respective 
                


    
    
    
                
    
                return back()->with('node_message', 'Node is Created!!');
                
            }else{
    
                $node = BinaryTree::where('id',$parent_id)->update([
                    'legs' => '11',
                ]);
    
            return back()->with('node_message', 'Node is full!!');
    
            }

            
        }else{

            return back()->with('node_message', 'User code is not your direct referral');

        }
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function check_legs($id)
    {
        # code...

        $node = BinaryTree::where('user_code', $id)->first();

        $node_legs = $node->legs;


        return $node_legs;

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BinaryTree  $binaryTree
     * @return \Illuminate\Http\Response
     */
    public function show(BinaryTree $binaryTree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BinaryTree  $binaryTree
     * @return \Illuminate\Http\Response
     */
    public function edit(BinaryTree $binaryTree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BinaryTree  $binaryTree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BinaryTree $binaryTree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BinaryTree  $binaryTree
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinaryTree $binaryTree)
    {
        //
    }
}

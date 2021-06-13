<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserWallet;
use App\UserProfile;
use App\Order;
use App\Notification;
use App\MindigoPack;
use App\MatchingBonus;
use App\Faq;
use App\DirectReferral;
use App\BinaryTree;

use App\MultipleAccount;

use Carbon\Carbon;

use Auth;




class UserPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {

        $user_id = Auth::user()->id;
        //
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];


        $credit = UserWallet::where('user_id', $user_id)->where('credit', '1')->sum('amount');
        $debit = UserWallet::where('user_id', $user_id)->where('debit', '0')->sum('amount');

        $balance = $credit - $debit;

        $direct_referrals = DirectReferral::with('referrees')->where('referrer_id', Auth::user()->id)->get();


        $notificationz = Notification::where('user_id', $user_id)->latest()->paginate(15);



        $my_order = Order::where('user_id', $user_id)->first();

        $other_accounts = MultipleAccount::where('owners_id', Auth::user()->id)->get();

     


        return view('user.home',[
            'notificationz' => $notificationz,
            'balance' => $balance,
            'my_order' => $my_order,
            'direct_referrals' => $direct_referrals
        ])->with($data);
    }

    public function my_account()
    {
        //

        $direct_referrals = DirectReferral::with('referrees')->where('referrer_id', Auth::user()->id)->get();

        $user_wallet = UserWallet::where('user_id', Auth::user()->id)->get();

        $weekNo = Carbon::now()->weekOfYear;


         $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('user.my_account',[
            'direct_referrals' => $direct_referrals,
            'user_wallet' => $user_wallet
        ])->with($data);
    }


    public function my_profile()
    {
        //
        $data = [
            'category_name' => 'users',
            'page_name' => 'account_settings',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];

        return view('user.my_profile')->with($data);
    }


    public function genealogy()
    {
        $user_id = Auth::user()->id;

        $parent = BinaryTree::where('user_id', $user_id)->first();

        // $my_code_n = Auth::user()->user_code;

        $all_nodes = BinaryTree::pluck('user_id');
        

        $direct_referrals = DirectReferral::with('referrees')->where('referrer_id', Auth::user()->id)->whereNotIn('referree_id',$all_nodes)->where('referree_points','!=', null)->get();

        // dd($parent);

  
       
        // $categorie = Category::find($id)->descendants;

   

        

        // $result =  Category::get()->where('id', $node_id)->toTree();

        try {
            //code...
            $result = BinaryTree::find($parent->id)->descendants->toTree();
        } catch (\Throwable $th) {
            //throw $th;
            $result = null;
        }


        try {
            //code...
            $node_children = $parent->children;
        } catch (\Throwable $th) {
            //throw $th;
        }
     

        


        try {

            if ($node_children[0]->position == 'L') {
                # code...
                // $total_left_points 
    
                $left_node = $node_children[0]->id;
    
                $left_group = BinaryTree::descendantsAndSelf($node_children[0]);
    
                // echo 'first left=';
    
                $left_group_ids = $left_group->pluck('user_id');
    
                $left_groups = DirectReferral::with('referrees')->whereIn('referree_id', $left_group_ids )->get();
    
     
            }
            
            

        } catch (\Throwable $th) {
            //throw $th;

            


        }

        try {

            if ($node_children[0]->position == 'R') {

          
                # code...
                // $total_left_points 
    
                $right_node = $node_children[0]->id;
    
                $right_group = BinaryTree::descendantsAndSelf($node_children[0]);
    
                // echo 'first left=';
    
                $right_group_ids = $right_group->pluck('user_id');
    
                $right_groups = DirectReferral::with('referrees')->whereIn('referree_id', $right_group_ids )->get();
    
     
            }
            
            

        } catch (\Throwable $th) {
            //throw $th;

            
        }

        try {

            if ($node_children[1]->position == 'L') {
                # code...
                // $total_left_points 
    
                $left_node = $node_children[1]->id;
    
                $left_group = BinaryTree::descendantsAndSelf($node_children[1]);
    
                // echo 'first left=';
    
                $left_group_ids = $left_group->pluck('user_id');
    
                $left_groups = DirectReferral::with('referrees')->whereIn('referree_id', $left_group_ids )->get();
    
     
            }
            
            

        } catch (\Throwable $th) {
            //throw $th;

            
        }

        try {

            if ($node_children[1]->position == 'R') {

          
                # code...
                // $total_left_points 
    
                $right_node = $node_children[1]->id;
    
                $right_group = BinaryTree::descendantsAndSelf($node_children[1]);
    
                // echo 'first left=';
    
                $right_group_ids = $right_group->pluck('user_id');
    
                $right_groups = DirectReferral::with('referrees')->whereIn('referree_id', $right_group_ids )->get();
    
     
            }
            
            

        } catch (\Throwable $th) {
            //throw $th;

            
        }









        // dd($parent);

       


        

    

        

 
        
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('user.genealogy',[
            'parent' => $parent,
            'direct_referrals' => $direct_referrals,
            'result' => $result,
            'right_groups' => $right_groups??null,
            'left_groups' => $left_groups??null

        ])->with($data);
    }

    public function genealogy22($code)
    {
        $userdata = User::where('user_code', $code)->first();

        $user_id = $userdata->id??null;

        $parent = BinaryTree::where('user_id', Auth::user()->id)->first();

        $dparent = BinaryTree::where('user_id', $user_id)->first();

        // $my_code_n = Auth::user()->user_code;

        $all_nodes = BinaryTree::pluck('user_id');
        

        $direct_referrals = DirectReferral::with('referrees')->where('referrer_id', Auth::user()->id)->whereNotIn('referree_id',$all_nodes)->where('referree_points','!=', null)->get();

        // dd($parent);

  
       
        // $categorie = Category::find($id)->descendants;

   

        

        // $result =  Category::get()->where('id', $node_id)->toTree();

        try {
            //code...
            $result = BinaryTree::find($dparent->id)->descendants->toTree();
        } catch (\Throwable $th) {
            //throw $th;
            $result = null;
        }


        try {
            //code...
            $node_children = $parent->children;
        } catch (\Throwable $th) {
            //throw $th;
        }
     

        


        try {

            if ($node_children[0]->position == 'L') {
                # code...
                // $total_left_points 
    
                $left_node = $node_children[0]->id;
    
                $left_group = BinaryTree::descendantsAndSelf($node_children[0]);
    
                // echo 'first left=';
    
                $left_group_ids = $left_group->pluck('user_id');
    
                $left_groups = DirectReferral::with('referrees')->whereIn('referree_id', $left_group_ids )->get();
    
     
            }
            
            

        } catch (\Throwable $th) {
            //throw $th;

            


        }

        try {

            if ($node_children[0]->position == 'R') {

          
                # code...
                // $total_left_points 
    
                $right_node = $node_children[0]->id;
    
                $right_group = BinaryTree::descendantsAndSelf($node_children[0]);
    
                // echo 'first left=';
    
                $right_group_ids = $right_group->pluck('user_id');
    
                $right_groups = DirectReferral::with('referrees')->whereIn('referree_id', $right_group_ids )->get();
    
     
            }
            
            

        } catch (\Throwable $th) {
            //throw $th;

            
        }

        try {

            if ($node_children[1]->position == 'L') {
                # code...
                // $total_left_points 
    
                $left_node = $node_children[1]->id;
    
                $left_group = BinaryTree::descendantsAndSelf($node_children[1]);
    
                // echo 'first left=';
    
                $left_group_ids = $left_group->pluck('user_id');
    
                $left_groups = DirectReferral::with('referrees')->whereIn('referree_id', $left_group_ids )->get();
    
     
            }
            
            

        } catch (\Throwable $th) {
            //throw $th;

            
        }

        try {

            if ($node_children[1]->position == 'R') {

          
                # code...
                // $total_left_points 
    
                $right_node = $node_children[1]->id;
    
                $right_group = BinaryTree::descendantsAndSelf($node_children[1]);
    
                // echo 'first left=';
    
                $right_group_ids = $right_group->pluck('user_id');
    
                $right_groups = DirectReferral::with('referrees')->whereIn('referree_id', $right_group_ids )->get();
    
     
            }
            
            

        } catch (\Throwable $th) {
            //throw $th;

            
        }









        // dd($parent);

       


        

    

        

 
        
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('user.genealogy22',[
            'parent' => $dparent,
            'direct_referrals' => $direct_referrals,
            'result' => $result,
            'right_groups' => $right_groups??null,
            'left_groups' => $left_groups??null

        ])->with($data);
    }

    public function genealogy2($code)
    {
        $user_id = Auth::user()->id;

        $parent = BinaryTree::where('user_code', $code)->first();

        $parent2 = BinaryTree::where('user_id', $user_id)->first();

        $my_code_n = Auth::user()->user_code;

        $all_nodes = BinaryTree::pluck('user_id');
        

        $direct_referrals = DirectReferral::with('referrees')->where('referrer_id', Auth::user()->id)->whereNotIn('referree_id',$all_nodes)->where('referree_points','!=', null)->get();

        // dd($parent);


        $node_children = $parent2->children;

        if ($node_children[0]->position == 'L') {
            # code...
            // $total_left_points 

            $left_node = $node_children[0]->id;

            $left_group = BinaryTree::descendantsAndSelf($node_children[0]);

            // echo 'first left=';

            $left_group_ids = $left_group->pluck('user_id');

            $left_groups = DirectReferral::whereIn('referree_id', $left_group_ids )->get();

 
        }

        if ($node_children[0]->position == 'R') {
            # code...
            // $total_left_points 

            $right_node = $node_children[0]->id;

            $right_group = BinaryTree::descendantsAndSelf($node_children[0]);

            // echo 'first left=';

            $right_group_ids = $left_group->pluck('user_id');

            $right_groups = DirectReferral::whereIn('referree_id', $right_group_ids )->get();

 
        }

        if ($node_children[1]->position == 'L') {
            # code...
            // $total_left_points 

            $left_node = $node_children[1]->id;

            $left_group = BinaryTree::descendantsAndSelf($node_children[1]);

            // echo 'first left=';

            $left_group_ids = $left_group->pluck('user_id');

            $left_groups = DirectReferral::whereIn('referree_id', $left_group_ids )->get();

 
        }

        if ($node_children[1]->position == 'R') {
            # code...
            // $total_left_points 

            $right_node = $node_children[1]->id;

            $right_group = BinaryTree::descendantsAndSelf($node_children[1]);

            // echo 'first left=';

            $right_group_ids = $left_group->pluck('user_id');

            $right_groups = DirectReferral::whereIn('referree_id', $right_group_ids )->get();

 
        }
    
        
    
        
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('user.genealogy2',[
            'parent' => $parent,
            'direct_referrals' => $direct_referrals,
            'right_groups' => $right_groups,
            'left_groups' => $left_groups
        ])->with($data);
    }


    


    public function mindigo_mart()
    {
        //

        $user_id = Auth::user()->id;

        $packs = MindigoPack::get();

        $my_order = Order::where('user_id', $user_id)->first();
        

         $data = [
            'category_name' => 'components',
            'page_name' => 'pricing_table',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('user.mindigo_mart',[
            'packs' => $packs,
            'my_order' => $my_order,
        ])->with($data);
    }

    public function purchase_success()
    {
        $data = [
            'category_name' => 'pages',
            'page_name' => 'error404',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];
        // $pageName = 'error404';
        return view('pages.pages.pages_error404')->with($data);
    }


    public function mindigo_resources()
    {
        //
        $packs = MindigoPack::get();

         $data = [
            'category_name' => 'components',
            'page_name' => 'pricing_table',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('user.mindigo_resources',[
            'packs' => $packs
        ])->with($data);
    }

    public function affiliate_reg($user_code)
    {
            $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_default',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            $pageName = 'auth_default';
        return view('pages.authentication.auth_register',[
            'user_code' => $user_code
        ])->with($data);
    }


    public function notification()
    {
        //
        $data = [
            'category_name' => 'components',
            'page_name' => 'tabs',
            'has_scrollspy' => 1,
            'scrollspy_offset' => 100,

        ];

        return view('user.notification')->with($data);
    }

    public function support()
    {
        //
        $data = [
            'category_name' => 'pages',
            'page_name' => 'faq2',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];

        return view('user.support')->with($data);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offline_payment()
    {
        //

        $data = [
            'category_name' => 'pages',
            'page_name' => 'faq2',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];

        return view('user.offline_payment')->with($data);


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

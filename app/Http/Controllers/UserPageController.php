<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserWallet;
use App\UserProfile;

use App\Notification;
use App\MindigoPack;
use App\MatchingBonus;
use App\Faq;

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



        $notificationz = Notification::where('user_id', $user_id)->latest()->paginate(15);



        

     

     


        return view('user.home',[
            'notificationz' => $notificationz,
            'balance' => $balance,
           
           
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

    public function my_books()
    {
        //
        $data = [
            'category_name' => 'users',
            'page_name' => 'account_settings',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];

        return view('user.my_books')->with($data);
    }

    public function school_library()
    {
        //
        $data = [
            'category_name' => 'users',
            'page_name' => 'account_settings',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];

        return view('user.school_library')->with($data);
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

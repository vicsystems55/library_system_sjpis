<?php

namespace App\Http\Controllers;

use App\Order;
use App\DirectReferral;
use App\Notification;
use App\User;
use Auth;
use App\UserWallet;
use App\MultipleAccount;
use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use Paystack;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function process_order()
    {
        //
        $paymentDetails = Paystack::getPaymentData();

        $myCode = $paymentDetails['data']['metadata']['user_code'];

        $package_id = $paymentDetails['data']['metadata']['package_id'];

        $package = $paymentDetails['data']['metadata']['package'];

        $amount = $paymentDetails['data']['amount'];

        $order = Order::updateOrCreate([
            'status' => $paymentDetails['data']['status'],
            'reference' => $paymentDetails['data']['reference'],
            'amount' => $paymentDetails['data']['amount'],
            'paid_at' => $paymentDetails['data']['paid_at'],
            'channel' => $paymentDetails['data']['channel'],
            'currency' => $paymentDetails['data']['currency'],
            'ip_address' => $paymentDetails['data']['ip_address'],
            'pack_title' => $paymentDetails['data']['metadata']['package'],
            'package' => $paymentDetails['data']['metadata']['package'],
            'sponsors_id' => $paymentDetails['data']['metadata']['user_code'],
            'user_id' => $paymentDetails['data']['metadata']['user_id'],
            'pack_id' => $paymentDetails['data']['metadata']['package_id'],
            'mobile' => $paymentDetails['data']['log']['mobile'],
            'status' => $paymentDetails['data']['status'],
            'customer_id' => $paymentDetails['data']['customer']['id'],
            'customer_email' => $paymentDetails['data']['customer']['email'],
            'customer_code' => $paymentDetails['data']['customer']['customer_code']
        ]);

        $referrer = DirectReferral::where('referree', $myCode )->first();

        $referrer_user = User::where('user_code', $referrer->referral)->first();

        $referree_user = User::where('user_code', $myCode)->first();

        $referrer_bonus = 5000;

        $referrer_points = 700;

        $weekNo = Carbon::now()->weekOfYear;

        $referrer_bonus_d = DirectReferral::where('referree', $myCode )->update([

            'referrer_bonus' => $referrer_bonus,
            'referree_points' => $referrer_points,
            'referree_pack_id' => $package_id,
            'weekInYear' =>    $weekNo
                
        ]);

        $referrer_activity = Notification::create([
            'user_id' => $referrer_user->id,
            'title' => "New Direct Commission alert",
            'body' => 'You just gained NGN ' .$referrer_bonus .' commission on a new ' .$package .' purchase by ' .$myCode .' ' .$referree_user->name,
        ]);

         //credit upline wallet
         UserWallet::Create([
            'user_id' => $referrer_user->id,
            'amount' => $referrer_bonus,
            'description' => 'Direct Commission',
            'credit' => '1',
        ]);

        
        //message to user
        $referree_activity = Notification::create([
            'user_id' => $referree_user->id,
            'title' => "New Package Purchased",
            'body' => 'You just bought ' .$package,
        ]);


        return redirect('/user/purchase_success');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function process_multiple_order()
    {
        //

        $paymentDetails = Paystack::getPaymentData();

        $user_id = Auth::user()->id;

        $user_data = User::where('id', $user_id)->first();

        $name = $user_data->name;

        $email = $user_data->email;

        $password = $user_data->password;

        $code = $user_data->user_code;

        $referrer_bonus = 5000;

        $referrer_points = 700;

        $weekNo = Carbon::now()->weekOfYear;

        $package_id = $paymentDetails['data']['metadata']['package_id'];

        $package = $paymentDetails['data']['metadata']['package'];


        $number_of_accounts = $paymentDetails['data']['metadata']['number_of_accounts'];

        // dd($number_of_accounts);

        for ($i=0; $i < $number_of_accounts ; $i++) { 
            # code...
            $regCode = "MNG" .rand(1110,9999);

            $new_user = User::create([
                'name' => $name,
                'email' => $code.rand(323,1000).'@mindigo.co.uk',
                'user_code' => $regCode,
                'password' => $password
                
            ]);

            $multiple_accounts = MultipleAccount::create([
                'owners_id' => $user_id,
                'account_id' => $new_user->id,
                'account_code' => $new_user->user_code,
                
            ]);

            $referral_bonus = DirectReferral::Create([
                'referrer_id' => $user_id,
                'referree_id' => $new_user->id,
                'referral' => $code,
                'referree' => $new_user->user_code,
                'referrer_bonus' => $referrer_bonus,
                'referree_points' => $referrer_points,
                'referree_pack_id' => $package_id,
                'weekInYear' =>    $weekNo
                
            ]);

            $order = Order::updateOrCreate([
                'status' => 'success',
                'reference' => 'MNGPAY'.rand(101010, 900090),
                'amount' => 99700,
                'paid_at' => 'offline',
                'channel' => 'offline',
                'currency' => 'NGN',
                'ip_address' => '127.0.0.1',
                'pack_title' => 'Star Package',
                'package' => 'Star Package',
                'sponsors_id' => $new_user->user_code,
                'user_id' => $new_user->id,
                'pack_id' => 1,
                'mobile' => false,
                'status' => 'success',
                'customer_id' => $new_user->id,
                'customer_email' => $new_user->email,
                'customer_code' => $new_user->user_code
            ]);

            $referrer_activity = Notification::create([
                'user_id' => $user_id,
                'title' => "New Direct Commission alert",
                'body' => 'You just gained NGN ' .$referrer_bonus .' commission on your new account ['.$new_user->user_code.']. ',
            ]);
    
             //credit upline wallet
             UserWallet::Create([
                'user_id' => $user_id,
                'amount' => $referrer_bonus,
                'description' => 'Direct Commission',
                'credit' => '1',
            ]);
    
            
            //message to user
            $referree_activity = Notification::create([
                'user_id' => $new_user->id,
                'title' => "New Package Purchased",
                'body' => 'You just bought ' .$package,
            ]);

            


    
        }







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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

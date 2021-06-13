<?php

namespace App\Http\Controllers;

use Cartalyst\Stripe\Stripe;

use Illuminate\Http\Request;

class StripePaymentController extends Controller
{
    //

    public function stripe()
    {
        
        $stripe = new Stripe('sk_test_51GcSsyE4ZHeTMw8TvXlwNJ8q5Zy2GfHq1ykZBfRAyp57hGqSgeqJoChH6gx6LQVSyY4LIfyybsqVr7f5PEPwI8pv00iQfPSnjZ', '2020-08-27');

        $paymentMethod = $stripe->paymentMethods()->create([
            'type' => 'card',
            'card' => [
                'number' => '4242424242424242',
                'exp_month' => 9,
                'exp_year' => 2023,
                'cvc' => '314'
            ],
        ]);
        
        dd($paymentMethod);
    }
}

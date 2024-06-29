<?php

namespace App\Http\Controllers\Api\Gatwayes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function payment($data = [])
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $response = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'gimme money!!!!',
                        ],
                        'unit_amount'  => $data['price'] * 100, // $40 = 4000
                    ],
                    'quantity'   => 1,
                ],
            ],

            'mode'        => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url'  => route('stripe.cancel'),
        ]);

       return $response->url;
    }

    public function success()
    {
        return response()->json([
            'data' => [
                'message' => 'Paid Successfully!'
            ],
            'error' => ''
        ],200);
    }

    public function cancel()
    {
        return response()->json([
            'data' => [],
            'error' => 'Paymnet faild'
        ],422);
    }
}

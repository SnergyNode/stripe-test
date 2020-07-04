<?php

namespace App\Http\Controllers;

use App\Traits\General\Utility;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class PaymentController extends Controller
{
    use Utility;
    //

    public function paymentProcess(Request $request){
        $sk = env('STRIPE_KEY', 'myApiKey');
        Stripe::setApiKey($sk);

        $checkout_session_id = $this->generateId();
        $request->session()->put('PaymentSessionId', $checkout_session_id);
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Test Payment',
                    ],
                    'unit_amount' => 1000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => "https://testpay.synergynode.com/card_pay/success?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => "https://testpay.synergynode.com/card_pay/cancel?session_id={CHECKOUT_SESSION_ID}",
        ]);

//        dd($session);

        return view('payment')->with(['session'=>$session]);
    }

    public function paymentSuccess(Request $request){
        $session=$request->input('session_id');
        return view('success');
    }

    public function paymentFailure(Request $request){
        $session=$request->input('session_id');
        return view('failure');
    }
}

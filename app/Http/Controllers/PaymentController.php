<?php

namespace App\Http\Controllers;
use Stripe;
use Illuminate\Http\Request;
use Exception;

class PaymentController extends Controller
{
    public function paymentPost(Request $request) {

        $request->validate([
          'amount'      => 'required',
          'currency'     => 'required',
        
        ]);
     
        try {

          \Stripe\Stripe::setApiKey("sk_test_51KTo9lBik8IxLK6i9B658nQIZ1dUJhcaRjUw3j8FLBoz2vTrMJ6uwxBCB0iPPdhaKOVWqa8MgOWw9mqYNSiC1r8a007BuGYwtS");
    
            $YOUR_DOMAIN = 'http://127.0.0.1:8000/';
      
            $checkout_session = \Stripe\Checkout\Session::create([
              'payment_method_types' => ['card'],
                'line_items' => [[
                  'price_data' => [
                    'currency' => $request->input('currency'),
                    'product_data' => [
                      'name' => 'Donation',
                    ],
                    'unit_amount' => $request->input('amount') * 100,
                  ],
                  'quantity' => 1,
                ]],
              'mode' => 'payment',
              'success_url' => $YOUR_DOMAIN . '',
              'cancel_url' => $YOUR_DOMAIN . '',
            ]); 
             return Redirect($checkout_session->url);
        
        } catch (\Exception $e) {
        
            return $e->getMessage();
        }
           
   }
  }


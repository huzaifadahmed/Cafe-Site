<?php
namespace App\StripeAction;


class StripeAction
{
    public static function CreateStripeSession($validated)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'=>[
                [
                    'price_data'=>[
                        'currency'=>'cad',
                        'product_data'=>[
                            'name'=>$validated['itemName'],
                        ],
                        'unit_amount'=>$validated['itemPrice']*100,
                    ],
                    'quantity'=>1,
                ],
            ],
            'mode'=>'payment',
            'success_url'=>route('success'),
            'cancel_url'=>route('order'),
        ]);

        return $session;
    }
}
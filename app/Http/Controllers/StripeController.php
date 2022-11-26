<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\StripeRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderReceived;
use App\StripeAction\StripeAction;


class StripeController extends Controller
{

    public function checkout(StripeRequest $request)
    {
        $validated = $request->validated();
        $session = StripeAction::CreateStripeSession($validated);
        return redirect()->away($session->url)->with([
            'validated'=>$validated
        ]);
    }

    public function success()
    {
        $validated=session()->get('validated');
        Mail::to('huzscafe@gmail.com')->send(new OrderReceived($validated));
        session()->flash('success', 'Your order has been received!');
        return redirect('/');

    }
}

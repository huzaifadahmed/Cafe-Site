<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Customer;
use App\Http\Requests\ConfirmReservationRequest;

class CustomerController extends Controller
{

    public function create()
    { 
        return view('confirmReservation',[
            'date'=>request()->date,
            'table'=>request()->table,

        ]);
    }

    public function store(ConfirmReservationRequest $request)
    {
        $validated=$request->validated();
        Customer::create($validated);
        return redirect('/')->with('success', 'Your reservation has been made!');
    }

}

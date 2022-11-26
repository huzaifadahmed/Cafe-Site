<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class AdminReservationController extends Controller
{

    public function index()
    {
        return view('admin.adminReservations',[
            'customers'=>Customer::all()
        ]);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('admin/reservations')->with('success', 'The reservation has been deleted!');
    }
}

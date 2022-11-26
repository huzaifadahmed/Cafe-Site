<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReservationFilterRequest;
use App\Models\Table;
use App\Models\Customer;
use App\FilterAction\FilterAction;

class TableController extends Controller
{
    public function index()
    {
        return view('reservation');    
    }

    public function create(ReservationFilterRequest $request)
    {
        $validated = $request->validated();
        $tables = FilterAction::EmptyTables($validated);
        return view('reservation',[
            'tables'=>$tables,
        ]);
    }

}

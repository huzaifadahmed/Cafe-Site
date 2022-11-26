<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Http\Requests\CreateReservationRequest;

class AdminTableController extends Controller
{

    public function index()
    {
        return view('admin.adminTable',[
            "tables"=>Table::all()
        ]);
    }

    public function create()
    {
        return view('Admin.adminTableCreate');
    }

    public function store(CreateReservationRequest $request)
    {
        $validated=$request->validated();
        Table::create($validated);
        return redirect('admin/table')->with('success', 'A new table has been created!');
    }

    public function edit(Table $table)
    {
        return view('Admin.adminTableEdit',[
            'table'=>$table
        ]);
    }

    public function update(CreateReservationRequest $request, Table $table)
    {
        $validated=$request->validated();
        $table->update($validated);
        return redirect('admin/table')->with('success', 'The table has been updated!');
    }

    public function destroy(Table $table)
    {
        $table->delete();
        return redirect('admin/table')->with('success', 'The table has been deleted!');

    }
}

<?php
namespace App\FilterAction;
use App\Models\Table;
use App\Models\Customer;


class FilterAction
{
    public static function EmptyTables($validated)
    {
        //---------Creates an array of table ids that are already reserved on that given date---------
        $reserved = Customer::where('reservationdate','=',$validated['date'])->pluck('table_id')->toArray();

        $tables = Table::all()->except($reserved);

        return $tables;
    }

}
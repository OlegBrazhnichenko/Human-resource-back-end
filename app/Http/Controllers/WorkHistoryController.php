<?php

namespace App\Http\Controllers;

use App\WorkHistory as WorkHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkHistoryController extends Controller
{
    public function get()
    {
        return WorkHistory::with('employee')
            ->with('company')
            ->get();
    }

    public function post(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'employee_id' => 'required|exists:employee,id|integer',
            'company_id' => 'required|exists:companies,id|integer',
            // @TODO fix timestamp validation
            'start_date' => 'required|integer|min:1000000000',
            'end_date' => 'required|integer|min:1000000000',
            // @ENDTODO
            'role' => 'required|string',
        ], [
            "start_date.min" => "Start date should be a timestamp",
            "end_date.min" => "Start date should be a timestamp"
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $workHistory = WorkHistory::create($request->only([
            'employee_id',
            'company_id',
            'start_date',
            'end_date',
            'role',
        ]));

        return response()->json(WorkHistory::with('employee')->with('company')->find($workHistory->id));
    }
}

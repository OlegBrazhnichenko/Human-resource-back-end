<?php

namespace App\Http\Controllers;

use App\WorkHistory as WorkHistory;
use App\Employee as Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function get()
    {
        return Employee::with('workHistory.company')->get();
    }

    public function post(Request $request)
    {

        $validation = Validator::make($request->all(), [
           'name' => 'required|min:3',
           'role' => 'required|min:3',
           'company_id' => 'required|exists:companies,id',
           'surname' => 'required|min:3',
           'bdate' => 'required|integer',
           'email' => 'required|email',
           'phone' => 'required|min:8',
           'address' => 'required',
        ]);

        if($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $employee = Employee::create($request->only([
            'name',
            'surname',
            'bdate',
            'email',
            'phone',
            'address',
        ]));

        WorkHistory::create([
            "company_id" => $request->get('company_id'),
            "employee_id" => $employee->id,
            "start_date" => time(),
            "end_date" => 0,
            "role" => $request->get('role')
        ]);

        return response()->json(Employee::with('workHistory.company')->find($employee->id));
    }
}

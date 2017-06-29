<?php

namespace App\Http\Controllers;

use App\Company as Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function get() {
        return Company::with('workHistory.employee')->get();
    }

    public function post(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'nipt' => 'required|integer|min:3',
            'address' => 'required',
        ]);

        if($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $company = Company::create($request->only([
            'name',
            'nipt',
            'address'
        ]));

        return response()->json(Company::with('workHistory.employee')->find($company->id));
    }
}

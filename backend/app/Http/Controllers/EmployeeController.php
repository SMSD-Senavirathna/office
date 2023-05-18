<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function save(Request $request){
       $employees = new Employee([
        'name' => $request->input('name'),
        'address' => $request->input('address'),
        'mobile' => $request->input('mobile'),
       ]);
       $employees->save();

       return response()->json('Employee created Successfully!');
    }

    public function show($id){
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->update($request->all());
        return response()->json('Employee updated successfully');
    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json('deleted');
    }

}

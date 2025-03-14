<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // index function which read the Employee
    function index()
    {
        $employees = Employee::all();
        return view('Employee.Employees', compact('employees'));
    }

    // create function which load the add Employee page
    function create()
    {
        return view('Employee.AddEmployee');
    }

    // Save function which save insert employee to the database
    function insert(Request $request)
    {
        $employee = new Employee();

        // Assign values from the request to the employee attributes
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->position = $request->position;
        $employee->phone_no = $request->phone_no;
        $employee->email = $request->email;
        $employee->date_hired = $request->date_hired;
        $employee->salary = $request->salary;
        $employee->shift_time = $request->shift_time;
        // Save the product to the database
        $employee->save();
        return redirect()->route('employee.read');
    }


    // Delete function which will delete the employee by using id
    function delete($id)
    {
        Employee::findOrFail($id)->delete();
        return redirect()->route('employee.read');
    }

    // edit function will load the edit page of employee
    function edit($id)
    {
        $employee = Employee::findOrFail($id)->first();
        return view('Employee.EditEmployee', compact('employee'));
    }

    // this function is going to update the select employee
    function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id)->first();


        // Assign values from the request to the employee attributes
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->position = $request->position;
        $employee->phone_no = $request->phone_no;
        $employee->email = $request->email;
        $employee->date_hired = $request->date_hired;
        $employee->salary = $request->salary;
        $employee->shift_time = $request->shift_time;
        // Save the product to the database
        $employee->save();
        return redirect()->route('employee.read');
    }
}

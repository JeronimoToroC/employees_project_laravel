<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->except('_token');
        Employee::insert($data);
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $employee = Employee::find($employee->id);
        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $_employee =  Employee::find($employee->id);

        $_employee->fullname = $request->fullname;
        $_employee->email = $request->email;
        $_employee->phone = $request->phone;
        $_employee->position = $request->position;
        $_employee->age = $request->age;
        $_employee->salary = $request->salary;
        $_employee->active = $request->active;
        $_employee->hireDate = $request->hireDate;

        $_employee->save();
        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}

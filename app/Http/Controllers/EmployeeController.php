<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate();
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
    public function store(EmployeeRequest $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|string|max:100',
            'position' => 'required|string|max:100',
            'age' => 'required|integer',
            'salary' => 'required|numeric',
            'active' => 'required|boolean',
            'hireDate' => 'required|date',
        ]);
        $employee = new Employee();
        $employee->fullname = $request->fullname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->position = $request->position;
        $employee->age = $request->age;
        $employee->salary = $request->salary;
        $employee->active = $request->active;
        $employee->hireDate = $request->hireDate;

        $employee->save();
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', ['employee' => $employee]);
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
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'age' => 'required',
            'salary' => 'required',
            'active' => 'required',
            'hireDate' => 'required',
        ]);

        $employee->fullname = $request->fullname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->position = $request->position;
        $employee->age = $request->age;
        $employee->salary = $request->salary;
        $employee->active = $request->active;
        $employee->hireDate = $request->hireDate;

        $employee->save();
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('/employee');
    }
}

@extends('layouts.template');

@section('content')
    <div class="container">
        <h1>Employee List</h1>
        <a href="{{ route('employee.create') }}" class="btn btn-primary mb-3">Create Employee</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Active</th>
                    <th>Hire Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->fullname }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>${{ number_format($employee->salary, 2) }}</td>
                        <td>{{ $employee->active ? 'Yes' : 'No' }}</td>
                        <td>{{ $employee->hireDate }}</td>
                        <td>
                            <a href="{{ route('employee.edit', $employee) }}" class="btn btn-primary"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                    class="fa-solid fa-trash"></i></button>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

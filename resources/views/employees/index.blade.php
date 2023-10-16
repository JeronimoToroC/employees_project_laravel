@extends('layouts.template');

@section('content')
    <div class="container mb-32">
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
                    <th>Show</th>
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
                            <a href="{{ route('employee.show', $employee) }}" class="btn btn-secondary">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('employee.edit', $employee) }}" class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('employee.destroy', $employee) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $employees->links() }}
    </div>
@endsection

@extends('layouts.template')
@section('content')
    <div class="container">
        <h1>Edit Employee</h1>

        <form method="POST" action="{{ route('employee.update', $employee) }}">
            @csrf
            @method('PUT')
            <div class="w-50">
                <div class="form-group">
                    <label for="fullname">Fullname:</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" value="{{ $employee->fullname }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $employee->phone }}">
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" name="position" id="position" class="form-control"
                        value="{{ $employee->position }}" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" class="form-control" value="{{ $employee->age }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="number" step="0.01" name="salary" id="salary" class="form-control"
                        value="{{ $employee->salary }}" required>
                </div>
                <div class="form-group">
                    <label for="active">Active:</label>
                    <select name="active" id="active" class="form-control">
                        <option value="1" {{ $employee->active ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$employee->active ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hireDate">Hire Date:</label>
                    <input type="date" name="hireDate" id="hireDate" class="form-control"
                        value="{{ $employee->hireDate }}" required>
                </div>
            </div>
            <div class="form-group my-2">
                <a href="/employee" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection

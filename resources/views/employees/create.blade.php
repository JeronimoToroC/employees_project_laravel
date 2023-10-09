@extends('layouts.template')
@section('content')
    <div class="container">
        <h1>Create Employee</h1>
        <form action="{{ url('/employee') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="fullname">Fullname:</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" id="position" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number" step="0.01" name="salary" id="salary" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="active">Active:</label>
                <select name="active" id="active" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hireDate">Hire Date:</label>
                <input type="date" name="hireDate" id="hireDate" class="form-control" required>
            </div>
            <div class="form-group">
                <a href="/employee" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Create Employee</button>
            </div>
        </form>
    </div>
@endsection

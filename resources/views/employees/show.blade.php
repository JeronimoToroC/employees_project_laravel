@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Detalles del Empleado
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $employee->id }}</p>
                <p><strong>Nombre Completo:</strong> {{ $employee->fullname }}</p>
                <p><strong>Correo Electrónico:</strong> {{ $employee->email }}</p>
                <p><strong>Teléfono:</strong> {{ $employee->phone }}</p>
                <p><strong>Cargo:</strong> {{ $employee->position }}</p>
                <p><strong>Edad:</strong> {{ $employee->age }}</p>
                <p><strong>Salario:</strong> ${{ number_format($employee->salary, 2) }}</p>
                <p><strong>Estado:</strong> {{ $employee->active ? 'Activo' : 'Inactivo' }}</p>
                <p><strong>Fecha de Contratación:</strong> {{ $employee->hireDate }}</p>
                <p><strong>Creado:</strong> {{ $employee->created_at }}</p>
                <p><strong>Actualizado:</strong> {{ $employee->updated_at }}</p>
            </div>
            <a href="{{ route('employee.index') }}" class="btn btn-primary w-20 m-4 mt-0">Back</a>
        </div>
    </div>
@endsection

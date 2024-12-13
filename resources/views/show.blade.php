

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de Información Personal</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $personalInfo->nombre }}</p>
            <p><strong>Apellidos:</strong> {{ $personalInfo->apellidos }}</p>
            <p><strong>Email:</strong> {{ $personalInfo->email }}</p>
            <p><strong>Teléfono:</strong> {{ $personalInfo->telefono }}</p>
            <p><strong>Ciudad:</strong> {{ $personalInfo->ciudad }}</p>
        </div>
    </div>
</div>
@endsection

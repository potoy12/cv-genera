
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Información Personal</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personalInfos as $info)
            <tr>
                <td>{{ $info->nombre }}</td>
                <td>{{ $info->apellidos }}</td>
                <td>{{ $info->email }}</td>
                <td>{{ $info->telefono }}</td>
                <td>{{ $info->ciudad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

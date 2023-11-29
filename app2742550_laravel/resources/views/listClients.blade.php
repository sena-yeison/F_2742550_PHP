@extends('layout')

@section('nombreModulo', 'Ventas')

@section('contenidoGeneral')
    <table style="border: 1px solid">
        <thead>
            <tr>
                <th>Itenm</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $value)
                <tr>
                    <td>{{ $value['id'] }}</td>
                    <td>{{ $value['nombre'] }}</td>
                    <td>{{ $value['apellidos'] }}</td>
                    <td>Acciones</td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection

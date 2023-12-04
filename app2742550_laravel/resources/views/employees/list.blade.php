@extends('layouts.app')


@section('nombreModulo', 'Empleados / Listar')

@section('contenidoGeneral')

    <div class="card">
        <div class="card-body">

            <a class="btn btn-primary" href=" {{ route('Employes.show.register') }}">Nuevo empleado</a> <br><br>
            <table id="TableClients" class="table" style="width: 100%" style="border: 1px solid">
                <thead>
                    <tr>
                        <th>Itenm</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cargo</th>
                        <th>Empresa</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employeesData as $value)
                        <tr>
                            <td>{{ $value['id'] }}</td>
                            <td>{{ $value['nombre'] }}</td>
                            <td>{{ $value['apellidos'] }}</td>
                            <td>{{ $value['cargo'] }}</td>
                            <td>{{ $value['razonSocial'] }}</td>
                            <td>
                                @if ($value['estado'] == 1)
                                    <button class="btn btn-success col-12 btn-sm">Activo</button>                                    
                                @else
                                    <button class="btn btn-danger col-12 btn-sm">Inactivo</button>                                    
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('Client.show.edit', $value['id']) }}" class="btn btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('Client.show.delete', $value['id']) }}" class="btn btn-danger"><i
                                            class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>



        </div>
    </div>


    <script>
        $(document).ready(function() {
            new DataTable('#TableClients', {
                responsive: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });
        })
    </script>

@endsection

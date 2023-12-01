@extends('layouts.app')


@section('nombreModulo', 'Clientes / Listar')

@section('contenidoGeneral')

    <div class="card">
        <div class="card-body">

            <a class="btn btn-primary" href=" {{ route('Clients.show.register') }}">Nuevo cliente</a> <br><br>
            <table id="TableClients" class="table" style="width: 100%" style="border: 1px solid">
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

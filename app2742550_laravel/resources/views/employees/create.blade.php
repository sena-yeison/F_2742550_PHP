@extends('layouts.app')

@section('nombreModulo', 'Clientes/Registro')

@section('contenidoGeneral')

    <div class="card">
        <div class="card-body">
            <form action=" {{ route('Employes.register') }} " method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nombres" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cargo</label>
                    <select type="text" name="cargos" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                        <option selected>Seleccione</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Vendedor">Vendedor</option>
                        <option value="Repartidor">Repartidor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Compañia</label>
                    <select type="text" name="compania" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                        <option selected>Seleccione</option>
                        @foreach ($companies as $item)
                            <option value="{{$item['id']}}">{{$item['razonSocial']}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection

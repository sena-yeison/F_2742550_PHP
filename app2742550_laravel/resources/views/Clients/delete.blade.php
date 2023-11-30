@extends('layout')

@section('nombreModulo', 'Clientes/Eliminación')

@section('contenidoGeneral')
<a href=" {{ route('Clients.list') }}" >Regresar</a> <br><br>
    
<div class="card">
    <div class="card-body">
        <p>Informacion del cliente</p>
        <p>Nombre: <small>{{$client->nombre}}</small></p>
        <p>Nombre: <small>{{$client->apellidos}}</small></p>
        <br><br>
        <h1>¿Estas seguro de eliminar al cliente?</h1>

        <form action=" {{route('Client.delete',$client->id )}} " method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection

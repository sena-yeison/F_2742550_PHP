@extends('layouts.app')

@section('nombreModulo', 'Clientes/Actualización')

@section('contenidoGeneral')
<a href=" {{ route('Clients.list') }}" >Regresar</a> <br><br>
    
<div class="card">
    <div class="card-body">
        <form action=" {{route('Client.update',$client->id )}} " method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input value="{{$client->nombre}}" type="text" name="nombres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          
            <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input value="{{$client->apellidos}}" type="text" name="apellidos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection

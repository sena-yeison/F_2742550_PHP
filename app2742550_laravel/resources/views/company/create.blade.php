@extends('layouts.app')

@section('nombreModulo', 'Clientes/Registro')

@section('contenidoGeneral')
    
<div class="card">
    <div class="card-body">
        <form action=" {{route('Company.register')}} " method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Razón social</label>
              <input type="text" name="razonSocial" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          
            <div class="form-group">
                <label for="exampleInputEmail1">Dirección</label>
                <input type="text" name="direccion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
    </div>
</div>
@endsection

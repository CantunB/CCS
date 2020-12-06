@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('clientes.store') }}" class="needs-validation" novalidate>
        @csrf
        @method('POST')
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="nombre">Nombre Cliente</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="tarjet">Tarjeta</label>
            <input type="text" class="form-control" id="tarjet" name="tarjeta" >
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular">
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion">
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
            <div class="col-md-4 mb-3">
                <label for="aval">Aval</label>
                <input type="text" class="form-control" id="aval" name="aval" >
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="direccion_aval">Direccion Aval</label>
                <input type="text" class="form-control" id="direccion_aval" name="direccion_aval" >
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="direccion_aval">Grupos</label>
                <select name="grupo_id" class="form-control">
                    <option value="">Selecciona un grupo
                        @foreach ($grupos as $item)
                        <option value="{{ $item->id }}">{{ $item->numero }} </option>
                        @endforeach
                    </option>
                </select>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </form>
</div>
@endsection

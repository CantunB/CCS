@extends('layouts.app')
@section('content')
<div class="container">
    <form class="form-inline"method="POST" action="{{ route('pagos.store') }}">
        @csrf
        @method('POST')
        <div class="form-row align-items-center">
            <div class="form-group">
                <label for="inputPassword6">Prestamo</label>
                <input type="number" id="prestamo" name="prestamo" class="form-control mx-sm-3">
                <small class="text-muted">
                    Solo numeros. &nbsp;
                </small>
            </div>
            <div class="form-group">
                <label for="inputPassword6">Pago</label>
                <input type="number" id="pago" name="pago" class="form-control mx-sm-3">
                <small class="text-muted">
                    Solo numeros. &nbsp;
                </small>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
</div>
@endsection

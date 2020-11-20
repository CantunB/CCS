@extends('layouts.app')
@section('content')
<div class="container">
    <form class="form-inline"method="POST" action="{{ route('grupos.store') }}">
        @csrf
        @method('POST')
        <div class="form-row align-items-center">
            <div class="form-group">
                <label for="inputPassword6">Grupo</label>
                <input type="number" id="numero" name="numero" class="form-control mx-sm-3">
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

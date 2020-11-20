@extends('layouts.app')
@section('content')
<div class="container">
    <h4>Pagos
        <a class="btn btn-primary float-right" href="{{ route('pagos.create') }}" role="button">Crear Pagos</a>
    </h4>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Prestamo</th>
            <th scope="col">Pago</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $item => $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->prestamo }}</td>
                    <td>{{ $value->pago }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection

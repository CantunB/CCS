@extends('layouts.app')
@section('content')
<div class="container">
    <h4>Clientes
        <a class="btn btn-primary float-right" href="{{ route('clientes.create') }}" role="button">Registrar Clientes</a>
    </h4><br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tarjeta</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Aval</th>
            <th scope="col">Direccion Aval</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $key => $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->nombre }}</td>
                    <td>{{ $value->tarjeta }}</td>
                    <td>{{ $value->celular}}</td>
                    <td>{{ $value->direccion}}</td>
                    <td>{{ $value->aval}}</td>
                    <td>{{ $value->direccion_aval}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection

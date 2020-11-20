@extends('layouts.app')
@section('content')
<div class="container">
    <h4>Grupos
        <a class="btn btn-primary float-right" href="{{ route('grupos.create') }}" role="button">Crear Grupos</a>
    </h4>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Grupo</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $item => $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->numero }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection

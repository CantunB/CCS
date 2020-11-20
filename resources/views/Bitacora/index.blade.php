@extends('layouts.app')
@section('content')
<div class="container">
    <h4>Bitacora</h4>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Prestamo</th>
            <th scope="col">Pago</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>$1500</td>
            <td>$150</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>$2000</td>
            <td>$200</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>$2500</td>
            <td>$250</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>$3000</td>
            <td>$300</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection

{{ csrf_field() }}
<div class="container">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nombre">Nombre</label>
            <input   @if( !empty($cliente->nombre)) readonly @endif type="text" class="form-control" id="" name="" placeholder="Nombre(s)" value="{{ old('nombre') ?? $cliente->nombre }}">
            <input type="hidden"class="form-control" id="cliente_id" name="cliente_id" placeholder="Nombre(s)" value="{{ old('nombre') ?? $cliente->id}}">
            <input class="form-control col-md-12" type="text" name="cont" id="cont" hidden>
        </div>
        <div class="form-group col-md-4">
            <label for="nombre">Tarjeta</label>
            <input   @if( !empty($cliente->tarjeta)) readonly @endif type="text" class="form-control" id="" name="" placeholder="Nombre(s)" value="{{ old('nombre') ?? $cliente->tarjeta }}">
        </div>
        <div class="form-group col-md-4">
            <label for="nombre">Prestamo</label>
            <select name="pago_id" class="form-control">
                <option value="" selected>Selecciona una opcion</option>
                @foreach ($pagos as $pago)
                    <option value="{{ $pago->id }}">$ {{ $pago->prestamo }}</option>
                @endforeach
            </select>
        </div>
    </div>
<div class="container">
    <div class="card col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th>Semanas</th>
                <th>Fechas</th>
                <th><button type="button" class="add_button btn btn-sm btn-success"><i class="fas fa-plus-circle"></i></button></th>
            </tr>
            </thead>
            <tbody class="field_wrapper">
            <input class="form-control col-md-2" type="text" name="cont" id="cont" hidden>
            <tr>
                <td>
                <input id="nombre" type="text"
                       class="form-control"
                       name="nombre[]" value="{{ old('nombre')}}" required autofocus>
                <td><input type="date" name="fecha[]" class="form-control" value="{{ old('fecha')}}" required></td>
                <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-minus-circle"></td>
            </tr>
            </tbody>

        </table>

        <br>
    </div>
    </div>
</br>
    <a href="{{url()->previous()}}" class="btn btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
</div>

{{ csrf_field() }}
<div class="container">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" value="{{$semanas->getCliente->nombre }}" readonly>
            <input type="hidden" class="form-control col-md-12" type="text" name="semana_id" id="semana_id" value="{{ $semanas->id }}">
            <input type="hidden" class="form-control col-md-12" type="text" name="cont" id="cont">
        </div>
        <div class="form-group col-md-4">
            <label for="nombre">Tarjeta</label>
            <input type="text" class="form-control" value="{{$semanas->getCliente->tarjeta }}" readonly>
        </div>
    </div>
<div class="container">
    <div class="card col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th>Semana</th>
                <th>Fechas</th>
                <th>Pago</th>
                <th>Mora</th>
                <th>Observacion</th>
                <th><button type="button" class="add_button btn btn-sm btn-success"><i class="fas fa-plus-circle"></i></button></th>
            </tr>
            </thead>
            <tbody class="field_wrapper">
            <input class="form-control col-md-2" type="text" name="cont" id="cont" hidden>
            <tr>
                <td>
                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $semanas->getSemana->nombre }}" required readonly>
                <td><input type="text" name="fecha_id" class="form-control" value="{{ $semanas->getSemana->fecha}}" required readonly></td>
                <td><input type="text" id="pago_id" name="pago_id" class="form-control" value="{{ $semanas->getPago->pago}}" required readonly></td>
                <td><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="20" onclick="actualizarValor(this.checked, this.value);" id="chk1">
                    <label class="form-check-label" for="defaultCheck1">
                      Incluir Mora
                    </label>
                  </div>
                </td>
                <td><textarea name="observacion" class="form-control"></textarea></td>
                <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-minus-circle"></td>
            </tr>
            </tbody>

        </table>
        <br>
          <div class="form-group row float-center">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-2 float-left">
              <input type="text" class="form-control" id="total" value="{{ $semanas->getPago->pago}}" readonly>
            </div>
          </div>
          <div class="form-group row float-center">
            <label for="colFormLabel" class=" col-sm-2 col-form-label">Efectivo</label>
            <div class="col-sm-2 float-left">
              <input type="text" class="efectivo form-control" id="efectivo">
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Cambio</label>
            <div class="col-sm-2">
              <input type="text" id="cambio" class="form-control" readonly>
            </div>
          </div>
    </div>
    </div>
</br>
    <a href="{{url()->previous()}}" class="btn btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn {{ $btnColor }}">{{ $btnText }}</button>
</div>

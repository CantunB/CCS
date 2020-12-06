@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">
            <h4>Cliente <span class="badge badge-success">Pagar</span></h4>
        </h5>
        <br>
        <div class="container">
                <!--    INICA CARD PARA EL RESULTADO  -->
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form id="form-rm" class="form-group" action="{{ route('semanas.update', $semanas->id) }}" method="POST">
                            {{ method_field('PUT') }}
                                @include('Semanas.partials.form-edit',
                                [
                                    'semanas',
                                    'btnText' => 'Pagar',
                                    'btnColor' => 'btn-primary'
                                ]
                                )
                        </form>
                    </div>
                </div>
            </div>
                <!--INICA CARD PARA EL RESULTADO -->
        </div>

    </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

    function actualizarValor(estaChequeado, valor) {
        // Variables.
        var suma_actual = 0;
        var campo_resultado = document.getElementById('total');
        valor = parseInt(valor);
        // Obtener la suma que pueda tener el campo 'txtValor'.
        try {
        if (campo_resultado != null) {
            if (isNaN(campo_resultado.value)) {
            campo_resultado.value = 0;
            }
            suma_actual = parseInt(campo_resultado.value);
        }
        } catch (ex) {
            alert('No existe el campo de la suma.');
        }
        // Determinar que: si el check está seleccionado "checked"
        // entonces, agregue el valor a la variable "suma_actual";
        // de lo contrario, le resta el valor del check a "suma_actual".
        if (estaChequeado == true) {
            suma_actual = suma_actual + valor;
        } else {
            suma_actual = suma_actual - valor;
        }

        // Colocar el resultado de las operaciones anteriores de vuelta
        // al campo "txtValor".
        campo_resultado.value = suma_actual;
        /*RESTA */
    var valor_inicial = $('#total').val();
    $( document ).ready(function() {
        $('.efectivo').keyup(function () {
            var valor = parseInt(valor_inicial);
            var valor_restar = 0;
            $('.efectivo').each(function () {
            if ($(this).val() > 0) {
                valor_restar += parseInt($(this).val());
            }
            });
            $('#cambio').val(valor_restar - valor);
        });
    });
    }



</script>
@endsection

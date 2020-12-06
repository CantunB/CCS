@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">
            <h4>Cliente <span class="badge badge-info">Buscar</span></h4>
        </h5>
        <br>
        <div class="container">
                <!--    INICA CARD PARA EL FORMULARIO -->
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <form class="form-inline" action="{{route('semanas.create')}}" method="GET">
                            {{ method_field('GET') }}
                            {{ csrf_field() }}
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                <label for="nombre">Nombre(s):&nbsp;&nbsp;</label>
                                    <input id="nombre" type="text" name="nombre" class="form-control" value="{{old('nombre')}}" required autofocus >&nbsp;&nbsp;
                                </div>
                                <div class="col-auto">
                                <label for="paterno" >Tarjeta:&nbsp;&nbsp;</label>
                                    <input id="paterno" type="text" name="tarjeta" class="form-control" value="{{old('tarjeta')}}">&nbsp;&nbsp;
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-outline-primary">
                                        <span>Buscar</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                <!--    TERMINA CARD PARA EL FORMULARIO -->
            <br>
                <!--    INICA CARD PARA EL RESULTADO  -->
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        @if(!empty($cliente->nombre))
                            @include('Semanas.search')
                            @else
                            @include('Semanas.search')
                        @endif
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
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 15; //Limitación de incremento de campos de entrada
        var addButton = $('.add_button'); //Agregar selector de botones
        var wrapper = $('.field_wrapper'); //Contenedor de campo de entrada
        var fieldHTML = '<tr>'+
            '<td><input type="text" name="nombre[]" class="form-control"></td>'+
            '<td><input type="date" name="fecha[]" class="form-control"></td>'+
            '<td><button type="button" class="remove_button btn btn-danger btn-sm"><i class="fas fa-minus-circle"></td></tr>';

        var x = 1; //El contador de campo inicial es 1
        document.getElementById("cont").value = x;
        //Una vez que se hace clic en el botón Agregar

        $(addButton).click(function(){
            //Verifique el número máximo de campos de entrada
            if(x < maxField){
                x++; //Contador de campo de incremento
                $(wrapper).append(fieldHTML); //Agregar campo html
                document.getElementById("cont").value = x;
            }
        });
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
            x--;
            document.getElementById("cont").value = x;
        });

    });
</script>
@endsection

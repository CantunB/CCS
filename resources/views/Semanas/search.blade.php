<form id="form-rm" class="form-group" action="{{ route('semanas.store') }}" method="POST">
    {{ method_field('POST') }}
        @include('Semanas.partials.form',
        [
            'cliente',
            'btnText' => 'Asignar',
            'btnColor' => 'btn-primary'
        ]
        )
</form>

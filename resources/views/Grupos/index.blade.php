@extends('layouts.app')
@section('content')
<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">{{ Request::root()  }}</li>
                                        <!--    <li class="breadcrumb-item"><a href="{{ Request::root() }}">{{ Request::root()  }}</a></li>-->
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ Request::path()  }}</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Lista de Clientes por Grupos</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Semanas asignadas
                                            <a class="btn btn-primary float-right" href="{{ route('grupos.create') }}" role="button">
                                            Crear Grupos</a>
                                        </h4><br>
                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Grupo</th>
                                                    <th scope="col">Clientes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($grupos as $item => $value)
                                                <tr>
                                                    <th scope="row">{{ $value->getGrupo->id }}</th>
                                                    <td>{{ $value->getGrupo->numero}}</td>
                                                    <td>
                                                        @foreach ($clientes_grupos as $data)
                                                            @if ($value->getGrupo->id === $data->grupo_id)
                                                            <li>{{ $data->getCliente->nombre }}</li>
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

@endsection

@extends('layouts.app')
@section('title','Bitacora de Semanas')
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
                                    <h4 class="page-title">Bitacora de Semanas</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Semanas asignadas
                                            <a class="btn btn-primary float-right" href="{{ route('semanas.create') }}" role="button">Asignar Semanas</a>
                                        </h4><br>
                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th>Grupo</th>
                                                    @for ($i=1; $i <= 15; $i++)
                                                    <th> S{{$i}}</th>
                                                    @endfor
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cliente_semana as $key => $cliente)
                                                <tr>
                                                    <td>{{ $cliente->getCliente->nombre}}</td>
                                                    <td>{{ $cliente->getGrupo->getGrupo->numero}}</td>
                                                    @foreach ($semanas as $semana)
                                                        @if ($cliente->getCliente->id === $semana->cliente_id)
                                                            @if($semana->status == '0')
                                                                <td>
                                                                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('semanas.edit', $semana->id) }}" role="button">{{ Carbon\Carbon::parse($semana->getSemana->fecha)->format('d-m-Y') }}</a>
                                                                </td>
                                                            @elseif($semana->status == '1')
                                                                <td>
                                                                    <a class="btn btn-sm btn-success" href="{{ $semana->id }}" role="button">{{ Carbon\Carbon::parse($semana->getSemana->fecha)->format('d-m-Y') }}</a>
                                                                </td>
                                                            @elseif($semana->status == '2')
                                                                <td>
                                                                    <a class="btn btn-sm btn-warning" href="{{ $semana->id }}" role="button">{{ Carbon\Carbon::parse($semana->getSemana->fecha)->format('d-m-Y') }}</a>
                                                                </td>
                                                            @elseif($semana->status == '3')
                                                                <td>
                                                                    <a class="btn btn-sm btn-danger" href="{{ $semana->id }}" role="button">{{ Carbon\Carbon::parse($semana->getSemana->fecha)->format('d-m-Y') }}</a>
                                                                </td>
                                                            @endif
                                                        @endif
                                                    @endforeach
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


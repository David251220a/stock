@extends('layouts.admin')

@section('styles')
    <script src="{{asset('plugins/sweetalerts/promise-polyfill.js')}}"></script>
    <link href="{{asset('plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_custom.css')}}">
    <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/select2/select2.min.css')}}">
    <link href="{{asset('assets/css/elements/search.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="mt-4 seperator-header">
        <h4 class="fw-bold" style="font-weight: bold">PADRON</h4>
    </div>

    @include('ui.busqueda')

    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <div class="table-responsive">

                @if (!(empty($data) ))

                    <table class="table table-hover">
                        <thead>
                            <th class="text-center">Consultas de Personas</th>
                        </thead>
                        <tbody>
                            <tbody>
                                <tr>
                                    <td style="text-align: center">CEDULA DE IDENTIDAD: <b>{{number_format($data->cedula, 0, ".", ".")}}</b></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">APELLIDO Y NOMBRE: <b>{{$data->apellido_nombre}}</b></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">Dirección</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center"><b>{{$data->direccion}}</b></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">LOCAL: <b>{{$data->comite}}</b></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center"> MESA : <b>{{$data->mesa}} </b></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">ORDEN : <b>{{$data->orden}} </b></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">OBSERVACIÓN:</td>
                                </tr>
                        </tbody>
                    </table>

                @else
                    <h4 class="text-center">No hay coicidencias</h4>
                @endif

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
    <script src="{{asset('plugins/sweetalerts/custom-sweetalert.js')}}"></script>
    <script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('js/puntos_decimal.js')}}"></script>
@endsection

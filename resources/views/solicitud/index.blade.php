@extends('layouts.admin')

@section('styles')
    <script src="{{asset('plugins/sweetalerts/promise-polyfill.js')}}"></script>
    <link href="{{asset('plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_custom.css')}}">
    <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="mt-4 seperator-header">
        <h4 class="fw-bold" style="font-weight: bold">Solicitud <i class="fa-solid fa-hand-holding-dollar"></i></h4>
    </div>

    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-3" class="table style-3  table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"> N#</th>
                                <th class="text-right">Documento</th>
                                <th>Apellido</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th class="text-center dt-no-sorting">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $item)
                                <tr>
                                    <td class="checkbox-column text-center"> {{$loop->iteration}} </td>
                                    <td class="text-right">{{number_format($item->documento, 0, ".", ".")}}</td>
                                    <td>{{$item->apellido}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->celular}}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="{{route('solicitud.edit', $item)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Solicitar">
                                                    <i class="fa-solid fa-hand-holding-dollar"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script src="plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="plugins/sweetalerts/custom-sweetalert.js"></script>
    <script src="{{asset('js/persona/index.js')}}"></script>
@endsection


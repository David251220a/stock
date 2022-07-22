@extends('layouts.admin')

@section('styles')
    <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/select2/select2.min.css')}}">
    {{-- <link href="{{asset('plugins/loaders/custom-loader.css')}}" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('content')

    <div class="mt-4 seperator-header">
        <h4 class="fw-bold" style="font-weight: bold">Crear Persona</h4>
    </div>

    <form action="{{route('persona.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate >
        @csrf

        <div class="form-row">
            <div class="col-md-12 mb-4">
                <div class="avatar avatar-xl image-style-content text-center">
                    <img alt="avatar" id="avatar" src="{{asset('assets/img/foto.jpg')}}" class="rounded-circle" style="height: 125px; width: 125px" />
                    <a href="javascript:cambio()"><i class="fa-solid fa-camera"></i> Agregar foto</a>
                    <input type="file" name="foto" id="foto" accept="image/*" hidden>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-3 mb-4">
                <label for="nombre">Documento</label>
                <input type="text" class="form-control" id="documento" name="documento" placeholder="Documento"
                onchange="puntos_decimal(this)" onkeyup="puntos_decimal(this)" required>
                <div class="valid-feedback">
                    Dato correcto!
                </div>
                <div class="invalid-feedback">
                    Por favor complete su numero de documento.
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                <div class="valid-feedback">
                    Dato correcto!
                </div>
                <div class="invalid-feedback">
                    Por favor complete su nombre.
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                <div class="valid-feedback">
                    Dato correcto!
                </div>
                <div class="invalid-feedback">
                    Por favor complete su apellido.
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                <div class="valid-feedback">
                    Dato correcto!
                </div>
                <div class="invalid-feedback">
                    Por favor complete su fecha de nacimiento.
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>

            <div class="col-md-6 mb-4">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                <div class="invalid-feedback">
                    Por favor complete la dirección.
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
            </div>
        </div>
        <div class="form-row">

            <div class="col-md-3 mb-4">
                <label for="celular">Linea baja</label>
                <input type="text" class="form-control" id="linea_baja" name="linea_baja" placeholder="Linea Baja">
            </div>

            @livewire('ciudad.ciudad-select')

            @livewire('nacionalidad.nacionalidad-select')
        </div>

        <button class="btn btn-primary" type="submit" id="btn_submit">Crear</button>
        <div style="display: none" id="exito">
            <div class="spinner-border text-success align-self-center "></div>
            <span class="ms-2 text-success">Procesando...</span>
        </div>


    </form>

@endsection

@section('js')

    <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('js/persona/create.js')}}"></script>
    {{-- <script src="{{asset('plugins/select2/custom-select2.js')}}"></script> --}}
@endsection

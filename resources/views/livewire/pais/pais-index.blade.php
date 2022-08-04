<div>
    <div class="mt-4 seperator-header">
        <h4 class="fw-bold" style="font-weight: bold">Pais</h4>
    </div>

    @include('ui.modal_pais')

    <div class="row layout-spacing">
        <div class="col-lg-12">

            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-3" class="table style-3  table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"> N#</th>
                                <th class="text-right">Nombre</th>
                                <th>Preferido</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center dt-no-sorting">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paises as $item)
                                <tr>
                                    <td class="checkbox-column text-center"> {{$loop->iteration}} </td>
                                    <td>{{$item->descripcion}}</td>
                                    <td>{{$item->preferido}}</td>
                                    <td>{{$item->estado_id}}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="#" class="bs-tooltip" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Editar">
                                                    <i class="fa-solid fa-pen-to-square"></i>
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

</div>

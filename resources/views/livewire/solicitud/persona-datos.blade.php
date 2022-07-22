<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">

    <div class="widget widget-table-two">

        <div class="widget-heading">
            <h5 class="">Datos Personales</h5>
        </div>

        <div class="widget-content">
            <div class="form-row">
                <div class="col-md-12 mb-4">
                    <label for="nombre">Direccion</label>
                    <input wire:model="direccion" type="text" class="form-control" value="{{$direccion}}" id="direccion" name="direccion" required>
                </div>

                <div class="col-md-4 mb-4">
                    <label for="ciudad" >Ciudad</label>
                    <select class="form-control  basic" name="ciudad" id="ciudad" wire:model="ciudad_id">
                        @foreach ($ciudad as $item)
                            <option {{( $ciudad_id == $item->id ? 'selected' : '' )}} value="{{$item->id}}">{{$item->descripcion}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nombre">Celular</label>
                    <input wire:model="celular" type="text" class="form-control" value="{{$celular}}" id="celular" name="celular" required>
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nombre">Linea Baja</label>
                    <input wire:model="linea_baja" type="text" class="form-control" value="{{$linea_baja}}" id="linea_baja" name="linea_baja" required>
                </div>
            </div>

        </div>

        @if ($continua)
            <div>
                <button wire:click="save()" class="btn btn-outline-info mb-2">Actualizar</button>
            </div>
        @else
            <div>
                <button wire:click="save()" class="btn btn-outline-success mb-2">Continua</button>
            </div>
        @endif

    </div>
</div>

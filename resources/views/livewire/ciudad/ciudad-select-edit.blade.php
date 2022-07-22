<div class="col-md-4 mb-4">
    <label for="ciudad" data-toggle="modal" data-target="#exampleModal">Ciudad</label>
    <select class="form-control  basic" name="ciudad" id="ciudad" wire:model="ciudad_id">
        @foreach ($ciudad as $item)
            <option {{( $ciudad_id == $item->id ? 'selected' : '' )}} value="{{$item->id}}">{{$item->descripcion}}</option>
        @endforeach
    </select>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Ciudad</h5>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label for="celular">Nombre Ciudad</label>
                        <input type="text" wire:model.defer="descripcion" name="descripcion" class="form-control" placeholder="Nombre Ciudad">
                        @error('descripcion')
                            <span id="mensaje">
                                <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                    Por favor complete este campo
                                </div>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button wire:click="resetUI" class="btn bnt-cancel" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                    <button type="button" wire:click="save" class="btn btn-primary close-modal">Guardar</button>
                    {{-- <button type="button" data-dismiss="modal" wire:click="save" class="btn btn-primary close-modal">Guardar</button> --}}
                </div>
            </div>
        </div>
    </div>

</div>

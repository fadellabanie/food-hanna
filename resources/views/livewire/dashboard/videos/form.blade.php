<div wire:ignore.self class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

        <div class="modal-content">
            <form>
                <div class="modal-header">
                    @if ($editMode)
                    <h5 class="modal-title" id="modalVehicleLabel">{{__("Update Video")}}</h5>
                    @else
                    <h5 class="modal-title" id="modalVehicleLabel">{{__("Add Video")}}</h5>
                    @endif
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <x-label>{{__("Name")}}</x-label>
                                <div class="col-12">
                                    <x-input wire:model.lazy="name" type="text" field="name"></x-input>
                                    <span class="form-text text-muted">{{__("Please enter name of video")}}</span>
                                </div>
                            </div>
                           
                        </div>
                         <div class="form-group row">
                            <div class="col-lg-12">
                                <x-label>{{__("Url")}}</x-label>
                                <div class="col-12">
                                    <x-input wire:model.lazy="url" type="text" field="url"></x-input>
                                    <span class="form-text text-muted">{{__("Please enter url of video")}}</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">{{__("Status")}}</label>
                            <div class="col-9 col-form-label">
                                <div class="radio-inline">
                                    <label class="radio radio-success">
                                    <input type="radio" value="1" name="status" wire:model.lazy="status">
                                    <span></span>{{__("Active")}}</label>
                                    <label class="radio radio-denger">
                                    <input type="radio" value="0" name="status" wire:model.lazy="status" >
                                   <span></span>{{__("Not Active")}}</label>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">{{__("Close")}}</button>

                        <button type="button" class="btn btn-success mr-2" wire:click.prevent="{{ $editMode ? 'update' : 'store'}}"
                        wire:loading.attr="disabled"
                        wire:loading.class="spinner spinner-white spinner-left" data-dismiss="modal">{{__("Save")}}</button>

                </div>
            </form>
        </div>

    </div>
</div>
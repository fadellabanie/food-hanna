<div wire:ignore.self class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

        <div class="modal-content">
            <form>
                <div class="modal-header">
                    @if ($editMode)
                    <h5 class="modal-title" id="modalVehicleLabel">{{__("Update Question")}}</h5>
                    @else
                    <h5 class="modal-title" id="modalVehicleLabel">{{__("Add Question")}}</h5>
                    @endif
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__(" English Question")}}</x-label>
                                <x-input type="text" wire:model="question_en" field='question_en'
                                    placeholder="{{__('Enter question')}}" />
                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Dutch Question")}}</x-label>
                                <x-input type="text" wire:model="question_nl" field='question_nl'
                                    placeholder="{{__('Enter question')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("English Answer")}}</x-label>
                                <x-textarea wire:model="answer_en" field='answer_en'></x-textarea>
                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Dutch Answer")}}</x-label>
                                <x-textarea wire:model="answer_nl" field='answer_nl'></x-textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">{{__("Close")}}</button>
                    <button type="button" class="btn btn-success mr-2"
                        wire:click.prevent="{{ $editMode ? 'update' : 'store'}}" wire:loading.attr="disabled"
                        wire:loading.class="spinner spinner-white spinner-left"
                        data-dismiss="modal">{{__("Save")}}</button>

                </div>
            </form>
        </div>

    </div>
</div>
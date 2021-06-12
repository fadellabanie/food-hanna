<div>
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">{{__("Update Settings")}}</h3>
                </div>
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <x-label>{{__("Address")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.address" field='address'
                                    placeholder="{{__('Enter address')}}" />
                            </div>
                            <div class="col-lg-4">
                                <x-label>{{__("Email")}}</x-label>
                                <x-input type="email" wire:model.defer="setting.email" field='email'
                                    placeholder="{{__('Enter Email')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("Mobile")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.mobile" field='mobile'
                                    placeholder="{{__('Enter Mobile')}}" />
                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Office")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.office" field='office'
                                    placeholder="{{__('Enter Office')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <x-label>{{__("Facebook")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.facebook" field='facebook'
                                    placeholder="{{__('Enter Facebook')}}" />
                            </div>
                            <div class="col-lg-3">
                                <x-label>{{__("Twitter")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.twitter" field='twitter'
                                    placeholder="{{__('Enter Twitter')}}" />
                            </div>
                            <div class="col-lg-3">
                                <x-label>{{__("Linkedin")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.linkedin" field='linkedin'
                                    placeholder="{{__('Enter Linkedin')}}" />
                            </div>
                            <div class="col-lg-3">
                                <x-label>{{__("Google Plus")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.google_plus" field='google_plus'
                                    placeholder="{{__('Enter Google Plus')}}" />
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-success mr-2" wire:click.prevent="submit"
                                    wire:loading.attr="disabled"
                                    wire:loading.class="spinner spinner-white spinner-left">{{__("Save")}}</button>
                                <a href="{{route('admin')}}" class="btn btn-secondary">{{__("Back")}}</a>
                            </div>
                            <div class="col-lg-6 text-lg-right">
                                <button type="reset" class="btn btn-danger">{{__("Delete")}}</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>
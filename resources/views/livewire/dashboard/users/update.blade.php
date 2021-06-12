<div>
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">{{__("Update Users")}}</h3>
                </div>
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("Name")}}</x-label>
                                <x-input type="text" wire:model.defer="user.name" field='name'
                                    placeholder="{{__('Enter Name')}}" />
                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Email")}}</x-label>
                                <x-input type="email" wire:model.defer="user.email" field='email'
                                    placeholder="{{__('Enter Email')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("Password")}}</x-label>
                                <x-input type="password" wire:model.defer="user.password" field='password'
                                    placeholder="{{__('Enter password')}}" />
                            </div>
                            <div class="col-lg-6">

                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-success mr-2" wire:click.prevent="submit"
                            wire:loading.attr="disabled"
                            wire:loading.class="spinner spinner-white spinner-left">{{__("Save")}}</button>
                        <a href="{{route('users.index')}}" class="btn btn-secondary">{{__("Back")}}</a>
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
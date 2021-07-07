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
                                <x-input type="text" wire:model.defer="setting.address" field='setting.address'
                                    placeholder="{{__('Enter address')}}" />
                            </div>
                            <div class="col-lg-4">
                                <x-label>{{__("Email")}}</x-label>
                                <x-input type="email" wire:model.defer="setting.email" field='setting.email'
                                    placeholder="{{__('Enter Email')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("Mobile")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.mobile" field='setting.mobile'
                                    placeholder="{{__('Enter Mobile')}}" />
                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Office")}}</x-label>
                                <x-input type="text" wire:model.lazy="setting.office" field='setting.office'
                                    placeholder="{{__('Enter Office')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <x-label>{{__("Facebook")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.facebook" field='setting.facebook'
                                    placeholder="{{__('Enter Facebook')}}" />
                            </div>
                            <div class="col-lg-3">
                                <x-label>{{__("Twitter")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.twitter" field='setting.twitter'
                                    placeholder="{{__('Enter Twitter')}}" />
                            </div>
                            <div class="col-lg-3">
                                <x-label>{{__("Linkedin")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.linkedin" field='setting.linkedin'
                                    placeholder="{{__('Enter Linkedin')}}" />
                            </div>
                            <div class="col-lg-3">
                                <x-label>{{__("Google Plus")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.google_plus" field='setting.google_plus'
                                    placeholder="{{__('Enter Google Plus')}}" />
                            </div>
                        </div>
                         <div class="form-group row">
                            <div class="col-lg-4">
                                <x-label>{{__("About Video")}}</x-label>
                                <x-input type="text" wire:model.defer="setting.about_video" field='setting.about_video'
                                    placeholder="{{__('Enter about video')}}" />
                            </div>
                            <div class="col-lg-8">
                                    <x-label>{{__("About Us")}}</x-label>
                                    <x-textarea wire:model.defer="setting.about" field='setting.about'></x-textarea>
                            </div>
                           
                           
                        </div>

                        <div class="col-lg-12">

                            <div class="col-lg-6">
                                <div class="form-group row @error('happy_cow_cheese') validated @enderror">
                                    <div class="col-lg-12">
                                        <x-label>{{ __('Happy Cow Cheese Icon') }}</x-label>
                                        <x-filepond wire:model="happy_cow_cheese" allowImagePreview
                                            imagePreviewMaxHeight="200" allowFileTypeValidation
                                            acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                                            allowFileSizeValidation maxFileSize="2mb" />
                                        <div class="mt-3 col-9 offset-md-3">
                                            @error('happy_cow_cheese')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            @if(! $happy_cow_cheese && $setting->happy_cow_cheese)
                                            <div class="mt-5 symbol symbol-150">
                                                <img alt="" src="{{ asset($setting->happy_cow_cheese) }}" />
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row @error('do_ghazal') validated @enderror">
                                    <div class="col-lg-12">
                                        <x-label>{{ __('Do Ghazal Icon') }}</x-label>
                                        <x-filepond wire:model="do_ghazal" allowImagePreview imagePreviewMaxHeight="200"
                                            allowFileTypeValidation
                                            acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                                            allowFileSizeValidation maxFileSize="2mb" />
                                        <div class="mt-3 col-9 offset-md-3">
                                            @error('do_ghazal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            @if(! $do_ghazal && $setting->do_ghazal)
                                            <div class="mt-5 symbol symbol-150">
                                                <img alt="" src="{{ asset( $setting->do_ghazal) }}" />
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row @error('dutso') validated @enderror">
                                    <div class="col-lg-12">
                                        <x-label>{{ __('Dutso') }}</x-label>
                                        <x-filepond wire:model="dutso" allowImagePreview imagePreviewMaxHeight="200"
                                            allowFileTypeValidation
                                            acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                                            allowFileSizeValidation maxFileSize="2mb" />
                                        <div class="mt-3 col-9 offset-md-3">
                                            @error('dutso')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            @if(! $dutso && $setting->dutso)
                                            <div class="mt-5 symbol symbol-150">
                                                <img alt="" src="{{ asset($setting->dutso) }}" />
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end::Group-->
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
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
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <x-label>{{ __('Do Ghazal Icon') }}</x-label>
                                    <div class="col-12" x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                                        <label for="icon"
                                            class="btn btn-light btn-text-primary btn-hover-text-primary font-weight-bold btn-sm d-flex">
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <!--begin::Svg Icon-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <rect fill="#000000" opacity="0.3" x="11" y="2" width="2"
                                                            height="14" rx="1" />
                                                        <path
                                                            d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <x-input type="file" id="icon" wire:model.lazy="do_ghazal" field="do_ghazal"
                                                style="display:none" />
                                        </label>

                                        <div wire:loading wire:target="do_ghazal">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>

                                        @if($do_ghazal)
                                        <div class="symbol symbol-150 mt-5">
                                            <img alt="" src="{{ $do_ghazal->temporaryUrl() }}" />
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <x-label>{{ __('Happy Cow Cheese Icon') }}</x-label>
                                    <div class="col-12" x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                                        <label for="icon"
                                            class="btn btn-light btn-text-primary btn-hover-text-primary font-weight-bold btn-sm d-flex">
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <!--begin::Svg Icon-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <rect fill="#000000" opacity="0.3" x="11" y="2" width="2"
                                                            height="14" rx="1" />
                                                        <path
                                                            d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <x-input type="file" id="icon" wire:model.lazy="happy_cow_cheese"
                                                field="happy_cow_cheese" style="display:none" />
                                        </label>

                                        <div wire:loading wire:target="happy_cow_cheese">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>

                                        @if($happy_cow_cheese)
                                        <div class="symbol symbol-150 mt-5">
                                            <img alt="" src="{{ $happy_cow_cheese->temporaryUrl() }}" />
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <x-label>{{ __('Dutso Icon') }}</x-label>
                                    <div class="col-12" x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                                        <label for="icon"
                                            class="btn btn-light btn-text-primary btn-hover-text-primary font-weight-bold btn-sm d-flex">
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <!--begin::Svg Icon-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <rect fill="#000000" opacity="0.3" x="11" y="2" width="2"
                                                            height="14" rx="1" />
                                                        <path
                                                            d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <x-input type="file" id="icon" wire:model.lazy="dutso" field="dutso"
                                                style="display:none" />
                                        </label>

                                        <div wire:loading wire:target="dutso">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>

                                        @if($dutso)
                                        <div class="symbol symbol-150 mt-5">
                                            <img alt="" src="{{ $dutso->temporaryUrl() }}" />
                                        </div>
                                        @endif
                                    </div>
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
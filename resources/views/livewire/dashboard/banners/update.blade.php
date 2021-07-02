<div>
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">{{__("Create Teams")}}</h3>
                </div>
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6 validated">
                                <x-label>{{__("Location")}}</x-label>
                                <div wire:ignore>
                                    <select class="form-control @error('banner.location') is-invalid @enderror"
                                        name="location" id="kt_select2_1" wire:model="banner.location">
                                        <option selected>{{__("select")}}</option>
                                        <option value="home">{{__("Home")}}</option>
                                        <option value="categories">{{__("Categories")}}</option>
                                        <option value="products">{{__("Products")}}</option>
                                    </select>

                                </div>
                                <x-error field="banner.location" />
                            </div>
                            <div class="col-lg-6 validated">
                                <label class="col-3 col-form-label">{{__("Status")}}</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-success">
                                            <input type="radio" value="1" name="status" wire:model="banner.status">
                                            <span></span>{{__("Active")}}</label>
                                        <label class="radio radio-denger">
                                            <input type="radio" value="0" name="status" wire:model="banner.status">
                                            <span></span>{{__("Not Active")}}</label>
                                    </div>

                                </div>
                                <x-error field="banner.status" />

                            </div>
                        </div>
                        <!--begin::Group-->
                        <div class="form-group row @error('images') validated @enderror">
                            <div class="col-lg-6">
                                <x-label>{{ __('Images') }}</x-label>
                                <x-filepond wire:model="images" allowImagePreview imagePreviewMaxHeight="200" multiple
                                    allowFileTypeValidation acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                                    allowFileSizeValidation maxFileSize="2mb" />
                                <div class="mt-3 col-9 offset-md-3">
                                    @error('images')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    @if(! $images )
                                    @foreach ($banner->images as $item)
                                    <div class="mt-5 symbol symbol-150">
                                        <img alt="" src="{{ asset($item->image) }}" />
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <!--end::Group-->
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-success mr-2" wire:click.prevent="submit"
                                    wire:loading.attr="disabled"
                                    wire:loading.class="spinner spinner-white spinner-left">{{__("Save")}}</button>
                                <a href="{{route('teams.index')}}" class="btn btn-secondary">{{__("Back")}}</a>
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
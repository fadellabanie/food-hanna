<div>
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">{{__("Update News")}}</h3>
                </div>
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("English Ttile")}}</x-label>
                                <x-input type="text" wire:model.defer="news.title_en" field='title_en'
                                    placeholder="{{__('Enter English Ttile')}}" />
                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Dutch Ttile")}}</x-label>
                                <x-input type="text" wire:model.defer="news.title_nl" field='title_nl'
                                    placeholder="{{__('Enter Dutch Title')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("English Description")}}</x-label>

                                <x-textarea wire:model.defer="news.description_en" field='description_en'>
                                </x-textarea>

                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Dutch Description")}}</x-label>
                                <x-textarea wire:model.defer="news.description_nl" field='description_nl'>
                                </x-textarea>
                            </div>
                        </div>
                        <!--begin::Group-->
                        <div class="form-group row @error('image') validated @enderror">
                            <div class="col-lg-6">
                                <x-label>{{ __('Image') }}</x-label>
                                <x-filepond wire:model="image" allowImagePreview imagePreviewMaxHeight="200"
                                    allowFileTypeValidation acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                                    allowFileSizeValidation maxFileSize="2mb" />
                                <div class="mt-3 col-9 offset-md-3">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    @if(! $image && $news->image)
                                    <div class="mt-5 symbol symbol-150">
                                        <img alt="" src="{{ asset('storage/' . $news->image) }}" />
                                    </div>
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
                                <a href="{{route('news.index')}}" class="btn btn-secondary">{{__("Back")}}</a>
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
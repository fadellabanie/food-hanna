<div>
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">{{__("Update Categories")}}</h3>
                </div>
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("English Name")}}</x-label>
                                <x-input type="text" wire:model.defer="category.name_en" field='name_en'
                                    placeholder="{{__('Enter English Name')}}" />
                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Dutch Name")}}</x-label>
                                <x-input type="text" wire:model.defer="category.name_nl" field='name_nl'
                                    placeholder="{{__('Enter Dutch Name')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <x-label>{{__("Type")}}</x-label>
                                <div wire:ignore>
                                    <select class="form-control @error('father') is-invalid @enderror" name="father"
                                        id="kt_select2_1" wire:model="category.father">
                                        <option value="do_ghazal">{{__("Do Ghazal")}}</option>
                                        <option value="happy_cow_cheese">{{__("Happy Cow Cheese")}}</option>
                                        <option value="dutso">{{__("Dutso")}}</option>
                                    </select>
                                </div>
                                <x-error field="father" />
                            </div>
                            <div class="col-lg-6">
                                <x-label>{{__("Category")}}</x-label>
                                <select class="form-control" wire:model="category.parent_id">
                                    <option value="">{{__("Main")}}</option>
                                    @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            @if ($hideChild == false)

                            @if ($childs)
                            <div class="col-lg-6">
                                <x-label>{{__("Sub Category")}}</x-label>
                                <select class="form-control" wire:model="category.child">
                                    <option value="">{{__("Main")}}</option>
                                    @foreach ($childs as $item)
                                    <option value="{{$item->id}}">{{$item->name_en}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @endif
                            @endif
                            @if ($hideSubChild == false)

                            @if ($subChilds)
                            <div class="col-lg-6">
                                <x-label>{{__("Child Category")}}</x-label>
                                <select class="form-control" wire:model="category.subChild_id">
                                    <option value="">{{__("Main")}}</option>
                                    @foreach ($subChilds as $item)
                                    <option value="{{$item->id}}">{{$item->name_en}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @endif
                            @endif
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
                                    @if(! $image && $category->image)
                                    <div class="mt-5 symbol symbol-150">
                                        <img alt="" src="{{ asset('storage/' . $category->image) }}" />
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
                                <a href="{{route('categories.index')}}" class="btn btn-secondary">{{__("Back")}}</a>
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

@section('scripts')

<script src="{{ asset('theme/assets/js/pages/crud/forms/widgets/select2.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#kt_select2_1').select2({
            placeholder: '',
        }).on('change', function () {
            @this.father = $(this).val();
        });
    });
</script>
@endsection
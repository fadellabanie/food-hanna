<div>

    <!--begin::Advance Table Widget 10-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">{{ __('Teams') }}</span>
                <span class="text-muted mt-3 font-weight-bold font-size-sm">{{ __('Show All') }}</span>
            </h3>
            <div class="d-flex align-items-center">
                <x-add-new-record-button href="{{ route('teams.create') }}">{{ __('Add new') }}
                </x-add-new-record-button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-0">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                    <thead>
                        <tr class="text-left">
                            <th class="pl-0" style="width: 30px">#</th>
                            <th class="pl-0" style="min-width: 120px">{{ __('Name') }}</th>
                            <th class="pl-0" style="min-width: 120px">{{ __('Position') }}</th>
                            <th class="pl-0" style="min-width: 120px">{{ __('Image') }}</th>
                            <th class="pr-0 text-left" style="min-width: 160px">{{ __('Control') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($teams as $team)
                        <tr>
                            <td class="pl-0 py-6">{{ $team->id }}</td>
                            <td class="pl-0">
                                <a href="{{ route('teams.edit', $team) }}"
                                    class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{ $team->name }}</a>
                            </td>
                            <td class="pl-0">
                                {{ $team->position }}
                            </td>
                            <td class="pl-0">
                                <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                                    <img alt="" src="{{ asset($team->image) }}" />
                                </div>
                            </td>
                            <td class="pr-0 text-left">
                                <x-edit-record-button href="{{ route('teams.edit', $team) }}" />
                                <x-delete-record-button wire:click="confirm({{ $team->id }})" data-toggle="modal"
                                    data-target="#deleteModal">
                                    </x-delete-modal>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-danger font-size-lg">{{ __('No records found') }}
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
            {{$teams->links('components.custom-pagination-links')}}

        </div>
        <!--end::Body-->
    </div>
    <!--end::Advance Table Widget 10-->
    <x-delete-modal></x-delete-modal>
</div>

@section('scripts')

<script type="text/javascript">
    window.livewire.on('openDeleteModal', () => {
        $('#deleteModal').modal('show');
    });
</script>
@endsection
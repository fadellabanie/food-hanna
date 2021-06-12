<div class="d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-flex flex-wrap mr-3">
        @if ($paginator->hasPages())

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">

            <div>
                <span class="d-flex flex-wrap py-2 mr-3">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())

                    @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                        <span class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" aria-hidden="true">
                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                        </span>
                    </span>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                    <span aria-disabled="true">
                        <span class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1">{{ $element }}</span>
                    </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                    @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <span aria-current="page">
                        <span
                            class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1">{{ $page }}</span>
                    </span>
                    @else
                    <button wire:click="gotoPage({{ $page }})" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1"
                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                        {{ $page }}
                    </button>
                    @endif
                    @endforeach
                    @endif
                    @endforeach




                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" rel="next" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"
                        aria-label="{{ __('pagination.next') }}">
                        <i class="ki ki-bold-arrow-next icon-xs"></i>
                    </button>
                    @else




                    @endif
                </span>
            </div>
        </div>
        @endif
    </div>
    <div class="d-flex align-items-center">


        <p class="text-muted">
            {!! __('Showing') !!}
            <span class="text-muted">{{ $paginator->firstItem() }}</span>
            {!! __('to') !!}

            <span class="text-muted mr-2">{{ $paginator->lastItem() }} </span>
            {!! __('of') !!}

            <span class="text-muted">{{ $paginator->total() }}</span>

            {!! __('results') !!}
        </p>



    </div>
</div>
<div class="mt-3" wire:ignore>
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg
                            class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{ ucfirst(request()->segment(1)) }}</li>
                @if(!empty(request()->segment(2)))
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ request()->segment(3) == 'edit' ? 'Edit' : ucfirst(request()->segment(2)) }}
                    </li>
                @endif
            </ol>
        </nav>

        @if(!empty($heading))
            <div class="d-block mb-4 mb-md-0">
                <h2 class="h4">{{ $heading ?? '' }}</h2>
                <p class="mb-0">{{ $subHeading ?? '' }}</p>
            </div>
        @endif
    </div>
</div>

@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item">
                    <a class="page-link">{{ __('Предыдущая') }}</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" rel="prev" href="{{ $paginator->previousPageUrl() }}">{{ __('Предыдущая') }}</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <a class="page-link"><span>{{ $page }}</span></a>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" rel="next" href="{{ $paginator->nextPageUrl() }}">{{ __('Следующая') }}</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" rel="next">{{ __('Следующая') }}</a>
                </li>
            @endif
        </ul>
    </nav>
@endif

@if ($paginator->hasPages())
    <ul class="pagination row" >
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pagination-item pagination-item--previous">
                <span> << </span>
            </li>
        @else
            <li class="pagination-item pagination-item--previous">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev""> << </a>
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
                        <li class="pagination-item pagination-item--current" ><span>{{ $page }}</span></li>
                    @else
                        <li class="pagination-item"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-item pagination-item--next">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" > >> </a>
            </li>
        @else
            <li class="pagination-item pagination-item--next" aria-disabled="true" >
            <span> >> </span>
            </li>
        @endif
    </ul>
@endif

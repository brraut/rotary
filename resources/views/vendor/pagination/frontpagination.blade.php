@if ($paginator->hasPages())
    <ul class="pagination d-flex flex-wrap align-items-center p-0" role="navigation">
       
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
                        <li class="active" aria-current="page"><a>@if($paginator->count() <10) {{ '0'.$page }} @else {{ $page }} @endif</a></li>
                    @else
                        <li><a href="{{ $url }}">@if($paginator->count() <10) {{ '0'.$page }} @else {{ $page }} @endif</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

      
    </ul>
@endif

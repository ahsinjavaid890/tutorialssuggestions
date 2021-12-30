@if ($paginator->hasPages())
<nav class="navigation pagination" role="navigation">
    <div class="nav-links">
        @if ($paginator->onFirstPage())
        <a class="prev page-numbers"><i class="arrow_carrot-left"></i></a>
        @else
        <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><i class="arrow_carrot-left"></i></a>
        @endif
        @foreach ($elements as $element)

            @if (is_string($element))
                <span aria-current="page" class="page-numbers current">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}"><i class="arrow_carrot-right"></i></a>
        @else
        <a class="next page-numbers"><i class="arrow_carrot-right"></i></a>
        @endif
    </div>
</nav>
@endif
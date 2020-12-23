@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" >
        <ul class="pagination">
            @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
                </li>
            @else
            <li class="page-item disabled">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</span>
                </li>

            @endif
            {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                        {{$page}}
                                        <span class="sr-only">(current)</span>
                                    </span>
                                    </li>
                                @else
                                <li class="page-item"><a class="page-link" href="{{$url}}">{{$page}}</a></li>

                                @endif
                            @endforeach
                        @endif
                    @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
                </li>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.next') !!}
                </span>
            @endif






                    {{-- Next Page Link --}}


        </ul>
    </nav>
@endif

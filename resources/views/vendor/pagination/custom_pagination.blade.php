@if ($paginator->hasPages())
    <div class="pagination">
        <div class="pagingarea">
            <div class="actions">
                <div class="paging_back">
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="paging_back_inactive">&lt;&lt;</span>
                            <span class="paging_back_inactive">&lt;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="next_page" href="{{$paginator->url(1) }}" rel="prev"
                                aria-label="@lang('pagination.previous')">&lt;&lt;</a>
                                <a class="next_page" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')">&lt;</a>
                        </li>
                    @endif
                </div>

                <div class="pages">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span
                                    class="page-link">{{ $element }}</span></li>
                        @endif
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="page-links" href="#" id="current">{{ $page }}</span>
                                @else
                                    <a class="page-links" href="{{ $url }}">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div><!-- paging ends -->

                {{-- Next Page Link --}}
                <div class="paging_forward">
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" id="next_page">&gt;</a>
                        <a href="{{ $paginator->url($paginator->lastPage()) }}" id="next_page">&gt;&gt;</a>
                     @else
                        <span class="paging_forward_inactive paging_forward_next">&gt;</span>
                        <span class="paging_forward_inactive paging_forward_next">&gt;&gt;</span>
                    @endif
                </div><!-- paging_forward ends -->

            </div>
        </div>
    </div>
@endif

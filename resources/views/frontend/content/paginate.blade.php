

@if ($paginator->hasPages())
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <ul style="display:flex; align-items:center; justify-content:center; gap:6px; list-style:none; padding:0; margin:30px 0 0; flex-wrap:wrap;">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <li>
                <span style="display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; border-radius:50%; background:#f5f5f5; color:#ccc; font-size:14px; cursor:not-allowed;">
                    <i class="fa fa-chevron-left"></i>
                </span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"
                   style="display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; border-radius:50%; background:#FFF5F5; color:#CC0000; font-size:14px; border:1px solid #FFE5E5; transition:all 0.2s;"
                   onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF';"
                   onmouseout="this.style.background='#FFF5F5'; this.style.color='#CC0000';">
                    <i class="fa fa-chevron-left"></i>
                </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li>
                    <span style="display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; color:#888; font-size:14px;">
                        {{ $element }}
                    </span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <span style="display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; border-radius:50%; background:#CC0000; color:#FFFFFF; font-size:14px; font-weight:700; box-shadow:0 3px 10px rgba(204,0,0,0.3);">
                                {{ $page }}
                            </span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}"
                               style="display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; border-radius:50%; background:#FFF5F5; color:#CC0000; font-size:14px; border:1px solid #FFE5E5; transition:all 0.2s;"
                               onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF';"
                               onmouseout="this.style.background='#FFF5F5'; this.style.color='#CC0000';">
                                {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"
                   style="display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; border-radius:50%; background:#FFF5F5; color:#CC0000; font-size:14px; border:1px solid #FFE5E5; transition:all 0.2s;"
                   onmouseover="this.style.background='#CC0000'; this.style.color='#FFFFFF';"
                   onmouseout="this.style.background='#FFF5F5'; this.style.color='#CC0000';">
                    <i class="fa fa-chevron-right"></i>
                </a>
            </li>
        @else
            <li>
                <span style="display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; border-radius:50%; background:#f5f5f5; color:#ccc; font-size:14px; cursor:not-allowed;">
                    <i class="fa fa-chevron-right"></i>
                </span>
            </li>
        @endif

    </ul>
</div>
@endif

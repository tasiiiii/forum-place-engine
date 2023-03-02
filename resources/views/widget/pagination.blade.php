<!-- SECTION PAGER BAR WRAP -->
<div class="section-pager-bar-wrap align-right">
    <!-- SECTION PAGER BAR -->
    <div class="section-pager-bar">
        <!-- SECTION PAGER -->
        <div class="section-pager">
            <!-- SECTION PAGER ITEM -->
            <div class="section-pager-item {{ $pagination->getFirstPage()->isCurrent() ? 'active' : '' }}">
                <!-- SECTION PAGER ITEM TEXT -->
                <a
                    class="section-pager-item-text"
                    href="{{ $pagination->getFirstPage()->getUrl() }}"
                    style="background: #161b28"
                >
                    {{ $pagination->getFirstPage()->getPage() }}
                </a>
                <!-- /SECTION PAGER ITEM TEXT -->
            </div>
            <!-- /SECTION PAGER ITEM -->

            @foreach ($pagination->getPageRange() as $page)
                <!-- SECTION PAGER ITEM -->
                <div class="section-pager-item {{ $page->isCurrent() ? 'active' : '' }}">
                    <!-- SECTION PAGER ITEM TEXT -->
                    <a class="section-pager-item-text" href="{{ $page->getUrl() }}">{{ $page->getPage() }}</a>
                    <!-- /SECTION PAGER ITEM TEXT -->
                </div>
                <!-- /SECTION PAGER ITEM -->
            @endforeach

            @if ($pagination->getLastPage())
                <!-- SECTION PAGER ITEM -->
                <div class="section-pager-item {{ $pagination->getLastPage()->isCurrent() ? 'active' : '' }}">
                    <!-- SECTION PAGER ITEM TEXT -->
                    <a
                        class="section-pager-item-text"
                        href="{{ $pagination->getLastPage()->getUrl() }}"
                        style="background: #161b28"
                    >
                        {{ $pagination->getLastPage()->getPage() }}
                    </a>
                    <!-- /SECTION PAGER ITEM TEXT -->
                </div>
                <!-- /SECTION PAGER ITEM -->
            @endif
    </div>
        <!-- /SECTION PAGER BAR -->
    </div>
<!-- /SECTION PAGER BAR WRAP -->
</div>

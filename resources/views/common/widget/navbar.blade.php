<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
    @if(\Illuminate\Support\Facades\Auth::guest())
        <div style="text-align: center;">
            <a href="{{ route('login_show') }}" class="btn btn-success" style="font-family: 'Russo One', sans-serif;">Вход</a>
        </div>
    @else
        <!-- USER AVATAR -->
        <a class="user-avatar small no-outline online" href="{{ route('profile_show') }}">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="{{ \Illuminate\Support\Facades\Auth::user()->avatar }}"></div>
                <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->

            <!-- USER AVATAR PROGRESS -->
            <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS -->

            <!-- USER AVATAR PROGRESS BORDER -->
            <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS BORDER -->

            <!-- USER AVATAR BADGE -->
            <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-22-24"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-16-18"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">24</p>
                <!-- /USER AVATAR BADGE TEXT -->
            </div>
            <!-- /USER AVATAR BADGE -->
        </a>
        <!-- /USER AVATAR -->
    @endif

    <!-- MENU -->
    <ul class="menu small">

        <!-- MENU ITEM -->
        <li class="menu-item active">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link text-tooltip-tfr" href="#" data-title="Forum">
                <!-- MENU ITEM LINK ICON -->
                <svg class="menu-item-link-icon icon-forums">
                    <use xlink:href="#svg-forums"></use>
                </svg>
                <!-- /MENU ITEM LINK ICON -->
            </a>
            <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link text-tooltip-tfr" href="#" data-title="Marketplace">
                <!-- MENU ITEM LINK ICON -->
                <svg class="menu-item-link-icon icon-marketplace">
                    <use xlink:href="#svg-marketplace"></use>
                </svg>
                <!-- /MENU ITEM LINK ICON -->
            </a>
            <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->
</nav>
<!-- /NAVIGATION WIDGET -->

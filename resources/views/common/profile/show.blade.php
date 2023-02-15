@extends('common.layout.main')

@section('title', 'Forum | Профиль')

@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">
        <!-- PROFILE HEADER -->
        <div class="profile-header">
            <!-- PROFILE HEADER COVER -->
            <figure class="profile-header-cover liquid">
                <img src="{{ $profileViewData->getBackground() }}" alt="cover-01">
            </figure>
            <!-- /PROFILE HEADER COVER -->

            <!-- PROFILE HEADER INFO -->
            <div class="profile-header-info">
                <!-- USER SHORT DESCRIPTION -->
                <div class="user-short-description big">
                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-avatar big" href="{{ route('profile_show') }}">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-148-164"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-100-110" data-src="{{ $profileViewData->getAvatar() }}"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->

                        <!-- USER AVATAR PROGRESS -->
                        <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-124-136"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS -->

                        <!-- USER AVATAR PROGRESS BORDER -->
                        <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-124-136"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS BORDER -->

                        <!-- USER AVATAR BADGE -->
                        <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->

                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-dark-32-34"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->

                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">1</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium" href="{{ route('profile_show') }}">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-120-132"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->

                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-82-90" data-src="{{ $profileViewData->getAvatar() }}"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->

                        <!-- USER AVATAR PROGRESS -->
                        <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-100-110"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS -->

                        <!-- USER AVATAR PROGRESS BORDER -->
                        <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-100-110"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS BORDER -->

                        <!-- USER AVATAR BADGE -->
                        <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-32-36"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->

                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-dark-26-28"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->

                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">24</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->

                    <!-- USER SHORT DESCRIPTION TITLE -->
                    <p class="user-short-description-title"><a id="username" href="{{ route('profile_show') }}">{{ $profileViewData->getName() }}</a></p>
                    <!-- /USER SHORT DESCRIPTION TITLE -->
                </div>
                <!-- /USER SHORT DESCRIPTION -->

                <!-- PROFILE HEADER SOCIAL LINKS WRAP -->
                <div class="profile-header-social-links-wrap">
                    <!-- PROFILE HEADER SOCIAL LINKS -->
                    <div id="profile-header-social-links-slider" class="profile-header-social-links">
                        <div class="profile-header-social-link">
                            <!-- SOCIAL LINK -->
                            <a class="social-link facebook" href="#">
                                <!-- ICON FACEBOOK -->
                                <svg class="icon-facebook">
                                    <use xlink:href="#svg-facebook"></use>
                                </svg>
                                <!-- /ICON FACEBOOK -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>

                        <div class="profile-header-social-link">
                            <!-- SOCIAL LINK -->
                            <a class="social-link twitter" href="#">
                                <!-- ICON TWITTER -->
                                <svg class="icon-twitter">
                                    <use xlink:href="#svg-twitter"></use>
                                </svg>
                                <!-- /ICON TWITTER -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>

                        <div class="profile-header-social-link">
                            <!-- SOCIAL LINK -->
                            <a class="social-link instagram" href="#">
                                <!-- ICON INSTAGRAM -->
                                <svg class="icon-instagram">
                                    <use xlink:href="#svg-instagram"></use>
                                </svg>
                                <!-- /ICON INSTAGRAM -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>

                        <div class="profile-header-social-link">
                            <!-- SOCIAL LINK -->
                            <a class="social-link twitch" href="#">
                                <!-- ICON TWITCH -->
                                <svg class="icon-twitch">
                                    <use xlink:href="#svg-twitch"></use>
                                </svg>
                                <!-- /ICON TWITCH -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>

                        <div class="profile-header-social-link">
                            <!-- SOCIAL LINK -->
                            <a class="social-link youtube" href="#">
                                <!-- ICON YOUTUBE -->
                                <svg class="icon-youtube">
                                    <use xlink:href="#svg-youtube"></use>
                                </svg>
                                <!-- /ICON YOUTUBE -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>

                        <div class="profile-header-social-link">
                            <!-- SOCIAL LINK -->
                            <a class="social-link patreon" href="#">
                                <!-- ICON PATREON -->
                                <svg class="icon-patreon">
                                    <use xlink:href="#svg-patreon"></use>
                                </svg>
                                <!-- /ICON PATREON -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>

                        <div class="profile-header-social-link">
                            <!-- SOCIAL LINK -->
                            <a class="social-link discord" href="#">
                                <!-- ICON DISCORD -->
                                <svg class="icon-discord">
                                    <use xlink:href="#svg-discord"></use>
                                </svg>
                                <!-- /ICON DISCORD -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>
                    </div>
                    <!-- /PROFILE HEADER SOCIAL LINKS -->

                    <!-- SLIDER CONTROLS -->
                    <div id="profile-header-social-links-slider-controls" class="slider-controls">
                        <!-- SLIDER CONTROL -->
                        <div class="slider-control left">
                            <!-- SLIDER CONTROL ICON -->
                            <svg class="slider-control-icon icon-small-arrow">
                                <use xlink:href="#svg-small-arrow"></use>
                            </svg>
                            <!-- /SLIDER CONTROL ICON -->
                        </div>
                        <!-- /SLIDER CONTROL -->

                        <!-- SLIDER CONTROL -->
                        <div class="slider-control right">
                            <!-- SLIDER CONTROL ICON -->
                            <svg class="slider-control-icon icon-small-arrow">
                                <use xlink:href="#svg-small-arrow"></use>
                            </svg>
                            <!-- /SLIDER CONTROL ICON -->
                        </div>
                        <!-- /SLIDER CONTROL -->
                    </div>
                    <!-- /SLIDER CONTROLS -->
                </div>
                <!-- /PROFILE HEADER SOCIAL LINKS WRAP -->

                <!-- USER STATS -->
                <div class="user-stats">
                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title">{{ $profileViewData->getTopicsCounter() }}</p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Топик</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->

                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title">{{ $profileViewData->getFriendsCounter() }}</p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Друзья</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->

                    <!-- USER STAT -->
                    <div class="user-stat big">
                        <!-- USER STAT TITLE -->
                        <p class="user-stat-title">{{ $profileViewData->getVisitsCounter() }}</p>
                        <!-- /USER STAT TITLE -->

                        <!-- USER STAT TEXT -->
                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Визиты</p>
                        <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->
                </div>
                <!-- /USER STATS -->

                <!-- PROFILE HEADER INFO ACTIONS -->
                <div class="profile-header-info-actions">
                    <!-- PROFILE HEADER INFO ACTION -->
                    <p class="profile-header-info-action button secondary"><span class="hide-text-mobile" style="font-family: 'Fira Sans', sans-serif;">Добавить друга</span></p>
                    <!-- /PROFILE HEADER INFO ACTION -->

                    <!-- PROFILE HEADER INFO ACTION -->
                    <p class="profile-header-info-action button primary"><span class="hide-text-mobile" style="font-family: 'Fira Sans', sans-serif;">Мессенджер</span></p>
                    <!-- /PROFILE HEADER INFO ACTION -->
                </div>
                <!-- /PROFILE HEADER INFO ACTIONS -->
            </div>
            <!-- /PROFILE HEADER INFO -->
        </div>
        <!-- /PROFILE HEADER -->

        <!-- GRID -->
        <div class="grid grid-3-6-3 mobile-prefer-content">
            <!-- GRID COLUMN -->
            <div class="grid-column">
                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title" style="font-family: 'Fira Sans', sans-serif;">Биография</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- PARAGRAPH -->
                        <p class="paragraph" style="font-family: 'Fira Sans', sans-serif;">{{ $profileViewData->getBiography() }}</p>
                        <!-- /PARAGRAPH -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title" style="font-family: 'Fira Sans', sans-serif;">Награды <span class="highlighted">1</span></p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- BADGE LIST -->
                        <div class="badge-list">
                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Gold User">
                                <img src="img/badge/gold-s.png" alt="badge-gold-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Profile Age">
                                <img src="img/badge/age-s.png" alt="badge-age-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Caffeinatted">
                                <img src="img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="The Warrior">
                                <img src="img/badge/warrior-s.png" alt="badge-warrior-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Forum Traveller">
                                <img src="img/badge/traveller-s.png" alt="badge-traveller-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Crazy Scientist">
                                <img src="img/badge/scientist-s.png" alt="badge-scientist-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Night Creature">
                                <img src="img/badge/ncreature-s.png" alt="badge-ncreature-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Mightier Than Sword">
                                <img src="img/badge/mightiers-s.png" alt="badge-mightiers-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="The Phantom">
                                <img src="img/badge/phantom-s.png" alt="badge-phantom-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="The Collector">
                                <img src="img/badge/collector-s.png" alt="badge-collector-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Bronze Cup">
                                <img src="img/badge/bronzec-s.png" alt="badge-bronzec-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Silver Cup">
                                <img src="img/badge/silverc-s.png" alt="badge-silverc-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item text-tooltip-tft" data-title="Gold Cup">
                                <img src="img/badge/goldc-s.png" alt="badge-goldc-s">
                            </div>
                            <!-- /BADGE ITEM -->
                        </div>
                        <!-- /BADGE LIST -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Друзья <span class="highlighted">{{ $profileViewData->getFriendsCounter() }}</span></p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- USER STATUS LIST -->
                        <div class="user-status-list">
                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
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
                                            <p class="user-avatar-badge-text">26</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah Diamond</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">2 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
                                            <p class="user-avatar-badge-text">16</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">5 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
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
                                            <p class="user-avatar-badge-text">13</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">0 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                                            <p class="user-avatar-badge-text">12</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">1 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request decline">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-remove-friend">
                                            <use xlink:href="#svg-remove-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
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
                                            <p class="user-avatar-badge-text">5</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">8 friends in common</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /USER STATUS LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->

                    <!-- WIDGET BOX BUTTON -->
                    <a class="widget-box-button button small secondary" href="#" style="font-family: 'Fira Sans', sans-serif;">Показать всех друзей</a>
                    <!-- /WIDGET BOX BUTTON -->
                </div>
                <!-- /WIDGET BOX -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                @foreach($profileViewData->getTopics() as $topic)
                    <!-- WIDGET BOX -->
                    <div class="widget-box no-padding">
                        <!-- WIDGET BOX SETTINGS -->
                        <div class="widget-box-settings">
                            <!-- POST SETTINGS WRAP -->
                            <div class="post-settings-wrap">
                                <!-- POST SETTINGS -->
                                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                    <!-- POST SETTINGS ICON -->
                                    <svg class="post-settings-icon icon-more-dots">
                                        <use xlink:href="#svg-more-dots"></use>
                                    </svg>
                                    <!-- /POST SETTINGS ICON -->
                                </div>
                                <!-- /POST SETTINGS -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown widget-box-post-settings-dropdown">
                                    <!-- SIMPLE DROPDOWN LINK -->
                                    <p class="simple-dropdown-link" style="font-family: 'Fira Sans', sans-serif;">Редактировать</p>
                                    <!-- /SIMPLE DROPDOWN LINK -->

                                    <!-- SIMPLE DROPDOWN LINK -->
                                    <p class="simple-dropdown-link" style="font-family: 'Fira Sans', sans-serif;">Заприватить</p>
                                    <!-- /SIMPLE DROPDOWN LINK -->

                                    <!-- SIMPLE DROPDOWN LINK -->
                                    <p class="simple-dropdown-link" style="font-family: 'Fira Sans', sans-serif;">Архивировать</p>
                                    <!-- /SIMPLE DROPDOWN LINK -->

                                    <!-- SIMPLE DROPDOWN LINK -->
                                    <p class="simple-dropdown-link" style="font-family: 'Fira Sans', sans-serif;">Удалить</p>
                                    <!-- /SIMPLE DROPDOWN LINK -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /POST SETTINGS WRAP -->
                        </div>
                        <!-- /WIDGET BOX SETTINGS -->

                        <!-- WIDGET BOX STATUS -->
                        <div class="widget-box-status">
                            <!-- WIDGET BOX STATUS CONTENT -->
                            <div class="widget-box-status-content">
                                <!-- USER STATUS -->
                                <div class="user-status">
                                    <!-- USER STATUS AVATAR -->
                                    <a class="user-status-avatar" href="#">
                                        <!-- USER AVATAR -->
                                        <div class="user-avatar small no-outline">
                                            <!-- USER AVATAR CONTENT -->
                                            <div class="user-avatar-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-image-30-32" data-src="{{ $topic->getCreatorAvatar() }}"></div>
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
                                                <p class="user-avatar-badge-text">1</p>
                                                <!-- /USER AVATAR BADGE TEXT -->
                                            </div>
                                            <!-- /USER AVATAR BADGE -->
                                        </div>
                                        <!-- /USER AVATAR -->
                                    </a>
                                    <!-- /USER STATUS AVATAR -->

                                    <!-- USER STATUS TITLE -->
                                    <p class="user-status-title medium"><a class="bold" href="#">{{ $topic->getCreatorName() }}</a></p>
                                    <!-- /USER STATUS TITLE -->

                                    <!-- USER STATUS TEXT -->
                                    <p class="user-status-text small">{{ $topic->getCreatedAt() }}</p>
                                    <!-- /USER STATUS TEXT -->
                                </div>
                                <!-- /USER STATUS -->

                                <!-- WIDGET BOX STATUS TEXT -->
                                <p class="widget-box-status-text">{!! $topic->getShortContent() !!}</p>
                                <!-- /WIDGET BOX STATUS TEXT -->

                                <!-- CONTENT ACTIONS -->
                                <div class="content-actions">
                                    <!-- CONTENT ACTION -->
                                    <div class="content-action">
                                        <!-- META LINE -->
                                        <div class="meta-line">
                                            <!-- META LINE LIST -->
                                            <div class="meta-line-list reaction-item-list" data-forum-topic-id="{{ $topic->getId() }}">
                                                @foreach($topic->getTopicReactions() as $topicReaction)
                                                <!-- REACTION ITEM -->
                                                <div class="reaction-item">
                                                    <!-- REACTION IMAGE -->
                                                    <img class="reaction-image reaction-item-dropdown-trigger" src="{{ $topicReaction->getReactionPath() }}">
                                                    <!-- /REACTION IMAGE -->

                                                    <!-- SIMPLE DROPDOWN -->
                                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                                        <!-- SIMPLE DROPDOWN TEXT -->
                                                        <p class="simple-dropdown-text"><img class="reaction" src="{{ $topicReaction->getReactionPath() }}"> <span class="bold">{{ $topicReaction->getReactionName() }}</span></p>
                                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                                        @foreach($topicReaction->getUsers() as $user)
                                                            <!-- SIMPLE DROPDOWN TEXT -->
                                                            <p class="simple-dropdown-text">{{ $user }}</p>
                                                            <!-- /SIMPLE DROPDOWN TEXT -->
                                                        @endforeach
                                                    </div>
                                                    <!-- /SIMPLE DROPDOWN -->
                                                </div>
                                                <!-- /REACTION ITEM -->
                                                @endforeach
                                            </div>
                                            <!-- /META LINE LIST -->
                                        </div>
                                        <!-- /META LINE -->
                                    </div>
                                    <!-- /CONTENT ACTION -->

                                    <!-- CONTENT ACTION -->
                                    <div class="content-action">
                                        <!-- META LINE -->
                                        <div class="meta-line">
                                            <!-- META LINE LINK -->
                                            <p class="meta-line-link" style="font-family: 'Fira Sans', sans-serif;">{{ $topic->getTopicMessagesCounter() }} Сообщения</p>
                                            <!-- /META LINE LINK -->
                                        </div>
                                        <!-- /META LINE -->

                                        <!-- META LINE -->
                                        <div class="meta-line">
                                            <!-- META LINE TEXT -->
                                            <p class="meta-line-text" style="font-family: 'Fira Sans', sans-serif;">{{ $topic->getShareCounter() }} Поделились</p>
                                            <!-- /META LINE TEXT -->
                                        </div>
                                        <!-- /META LINE -->
                                    </div>
                                    <!-- /CONTENT ACTION -->
                                </div>
                                <!-- /CONTENT ACTIONS -->
                            </div>
                            <!-- /WIDGET BOX STATUS CONTENT -->
                        </div>
                        <!-- /WIDGET BOX STATUS -->

                        <!-- POST OPTIONS -->
                        <div class="post-options">
                            <!-- POST OPTION WRAP -->
                            <div class="post-option-wrap">
                                <!-- POST OPTION -->
                                <div class="post-option reaction-options-dropdown-trigger" data-forum-topic-id="{{ $topic->getId() }}" @if ($topic->isLiked()) style="background: #181944" @endif>
                                    <!-- POST OPTION ICON -->
                                    <svg class="post-option-icon icon-thumbs-up">
                                        <use xlink:href="#svg-thumbs-up"></use>
                                    </svg>
                                    <!-- /POST OPTION ICON -->

                                    <!-- POST OPTION TEXT -->
                                    <p class="post-option-text" style="font-family: 'Fira Sans', sans-serif;">Реакция!</p>
                                    <!-- /POST OPTION TEXT -->
                                </div>
                                <!-- /POST OPTION -->

                                <!-- REACTION OPTIONS -->
                                <div class="reaction-options reaction-options-dropdown" data-forum-topic-id="{{ $topic->getId() }}">
                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="/img/reaction/like.png" alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="/img/reaction/love.png" alt="reaction-love">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="/img/reaction/dislike.png" alt="reaction-dislike">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="/img/reaction/happy.png" alt="reaction-happy">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="/img/reaction/funny.png" alt="reaction-funny">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="/img/reaction/wow.png" alt="reaction-wow">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="/img/reaction/angry.png" alt="reaction-angry">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="/img/reaction/sad.png" alt="reaction-sad">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->
                                </div>
                                <!-- /REACTION OPTIONS -->
                            </div>
                            <!-- /POST OPTION WRAP -->

                            <!-- POST OPTION -->
                            <div class="post-option">
                                <!-- POST OPTION ICON -->
                                <svg class="post-option-icon icon-comment">
                                    <use xlink:href="#svg-comment"></use>
                                </svg>
                                <!-- /POST OPTION ICON -->

                                <!-- POST OPTION TEXT -->
                                <p class="post-option-text" style="font-family: 'Fira Sans', sans-serif;">Подробнее</p>
                                <!-- /POST OPTION TEXT -->
                            </div>
                            <!-- /POST OPTION -->

                            <!-- POST OPTION -->
                            <div class="post-option">
                                <!-- POST OPTION ICON -->
                                <svg class="post-option-icon icon-share">
                                    <use xlink:href="#svg-share"></use>
                                </svg>
                                <!-- /POST OPTION ICON -->

                                <!-- POST OPTION TEXT -->
                                <p class="post-option-text" style="font-family: 'Fira Sans', sans-serif;">Поделиться</p>
                                <!-- /POST OPTION TEXT -->
                            </div>
                            <!-- /POST OPTION -->
                        </div>
                        <!-- /POST OPTIONS -->
                    </div>
                    <!-- /WIDGET BOX -->
                @endforeach

                <!-- LOADER BARS -->
                <div class="loader-bars">
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                </div>
                <!-- /LOADER BARS -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title" style="font-family: 'Fira Sans', sans-serif;">Группы <span class="highlighted">0</span></p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- USER STATUS LIST -->
                        <div class="user-status-list">
                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/29.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Twitch Streamers</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">265 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/24.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Cosplayers of the World</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">139 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/25.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Stream Designers</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">466 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/28.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Street Artists</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">951 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request decline">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-leave-group">
                                            <use xlink:href="#svg-leave-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/27.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Gaming Watchtower</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">2.365 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /USER STATUS LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->
@endsection

@section('js')
    <script>
        const Elements = {
            reactionOption: '.reaction-option',
            reactionOptions: '.reaction-options',
            reactionOptionsDropdownTrigger: '.reaction-options-dropdown-trigger'
        }

        const TopicManager = {
            createReaction: e => {
                const target          = $(e.target);
                const reactionOptions = target.closest(Elements.reactionOptions);
                const forumTopicId    = reactionOptions.data('forum-topic-id');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('create_topic_reaction') }}',
                    data: {
                        forum_topic_id: forumTopicId,
                        reaction: target.closest(Elements.reactionOption).data('title').toLowerCase(),
                        '_token': '{{ csrf_token() }}'
                    },
                    success: res => {
                        location.reload();
                    },
                    error: res => {
                        console.error(res);
                    }
                })
            },
            removeReaction: e => {
                const target       = $(e.target);
                const container    = target.closest(Elements.reactionOptionsDropdownTrigger);
                const forumTopicId = container.data('forum-topic-id');

                if (!container.attr('style')) {
                    return;
                }

                $.ajax({
                    type: 'DELETE',
                    url: '{{ route('remove_topic_reaction') }}',
                    data: {
                        forum_topic_id: forumTopicId,
                        '_token': '{{ csrf_token() }}'
                    },
                    success: res => {
                        location.reload();
                    },
                    error: res => {
                        console.error(res);
                    }
                })
            }
        };

        $(document).ready(e => {
            $(Elements.reactionOption).click(e => {
                TopicManager.createReaction(e);
            });

            $(Elements.reactionOptionsDropdownTrigger).click(e => {
                TopicManager.removeReaction(e);
            });
        });
    </script>
@endsection

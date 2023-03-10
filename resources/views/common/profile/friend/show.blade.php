@extends('common.layout.main')

@section('title', 'Forum | Друзья')

@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid">
        <!-- SECTION -->
        <section class="section">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION HEADER INFO -->
                <div class="section-header-info">
                    <!-- SECTION TITLE -->
                    <h2 class="section-title" style="font-family: 'Fira Sans', sans-serif;">Друзья <span class="highlighted">82</span></h2>
                    <!-- /SECTION TITLE -->
                </div>
                <!-- /SECTION HEADER INFO -->
            </div>
            <!-- /SECTION HEADER -->

            <!-- SECTION FILTERS BAR -->
            <div class="section-filters-bar v1">
                <!-- SECTION FILTERS BAR ACTIONS -->
                <div class="section-filters-bar-actions">
                    <!-- FORM -->
                    <form class="form">
                        <!-- FORM INPUT -->
                        <div class="form-input small with-button">
                            <label for="friends-search" style="font-family: 'Fira Sans', sans-serif;">Поиск</label>
                            <input type="text" id="friends-search" name="friends_search">
                            <!-- BUTTON -->
                            <button class="button primary">
                                <!-- ICON MAGNIFYING GLASS -->
                                <svg class="icon-magnifying-glass">
                                    <use xlink:href="#svg-magnifying-glass"></use>
                                </svg>
                                <!-- /ICON MAGNIFYING GLASS -->
                            </button>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /FORM INPUT -->

                        <!-- FORM SELECT -->
                        <div class="form-select">
                            <label for="friends-filter-category">Filter By</label>
                            <select id="friends-filter-category" name="friends_filter_category">
                                <option value="0" style="font-family: 'Fira Sans', sans-serif;">Релевантность</option>
                                <option value="1" style="font-family: 'Fira Sans', sans-serif;">Последние</option>
                                <option value="2" style="font-family: 'Fira Sans', sans-serif;">Уровень</option>
                            </select>
                            <!-- FORM SELECT ICON -->
                            <svg class="form-select-icon icon-small-arrow">
                                <use xlink:href="#svg-small-arrow"></use>
                            </svg>
                            <!-- /FORM SELECT ICON -->
                        </div>
                        <!-- /FORM SELECT -->
                    </form>
                    <!-- /FORM -->

                    <!-- FILTER TABS -->
                    <div class="filter-tabs">
                        <!-- FILTER TAB -->
                        <div class="filter-tab active">
                            <!-- FILTER TAB TEXT -->
                            <p class="filter-tab-text" style="font-family: 'Fira Sans', sans-serif;">Релевантность</p>
                            <!-- /FILTER TAB TEXT -->
                        </div>
                        <!-- /FILTER TAB -->

                        <!-- FILTER TAB -->
                        <div class="filter-tab">
                            <!-- FILTER TAB TEXT -->
                            <p class="filter-tab-text" style="font-family: 'Fira Sans', sans-serif;">Последние</p>
                            <!-- /FILTER TAB TEXT -->
                        </div>
                        <!-- /FILTER TAB -->

                        <!-- FILTER TAB -->
                        <div class="filter-tab">
                            <!-- FILTER TAB TEXT -->
                            <p class="filter-tab-text" style="font-family: 'Fira Sans', sans-serif;">Уровень</p>
                            <!-- /FILTER TAB TEXT -->
                        </div>
                        <!-- /FILTER TAB -->
                    </div>
                    <!-- /FILTER TABS -->
                </div>
                <!-- /SECTION FILTERS BAR ACTIONS -->
            </div>
            <!-- /SECTION FILTERS BAR -->

            <!-- GRID -->
            <div class="grid grid-4-4-4 centered">
                <!-- USER PREVIEW -->
                <div class="user-preview">
                    <!-- USER PREVIEW COVER -->
                    <figure class="user-preview-cover liquid">
                        <img src="/img/cover/04.jpg" alt="cover-04">
                    </figure>
                    <!-- /USER PREVIEW COVER -->

                    <!-- USER PREVIEW INFO -->
                    <div class="user-preview-info">
                        <!-- USER SHORT DESCRIPTION -->
                        <div class="user-short-description">
                            <!-- USER SHORT DESCRIPTION AVATAR -->
                            <a class="user-short-description-avatar user-avatar medium" href="#">
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
                                    <div class="hexagon-image-82-90" data-src="/img/avatar/05.jpg"></div>
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
                                    <p class="user-avatar-badge-text">12</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </a>
                            <!-- /USER SHORT DESCRIPTION AVATAR -->

                            <!-- USER SHORT DESCRIPTION TITLE -->
                            <p class="user-short-description-title"><a href="#">NekoBebop</a></p>
                            <!-- /USER SHORT DESCRIPTION TITLE -->
                        </div>
                        <!-- /USER SHORT DESCRIPTION -->

                        <!-- BADGE LIST -->
                        <div class="badge-list small">
                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/silver-s.png" alt="badge-silver-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/fcultivator-s.png" alt="badge-fcultivator-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/scientist-s.png" alt="badge-scientist-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/rmachine-s.png" alt="badge-rmachine-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <a class="badge-item" href="#">
                                <img src="/img/badge/blank-s.png" alt="badge-blank-s">
                                <!-- BADGE ITEM TEXT -->
                                <p class="badge-item-text">+29</p>
                                <!-- /BADGE ITEM TEXT -->
                            </a>
                            <!-- /BADGE ITEM -->
                        </div>
                        <!-- /BADGE LIST -->

                        <!-- USER PREVIEW STATS SLIDES -->
                        <div id="user-preview-stats-slides-01" class="user-preview-stats-slides">
                            <!-- USER PREVIEW STATS SLIDE -->
                            <div class="user-preview-stats-slide">
                                <!-- USER STATS -->
                                <div class="user-stats">
                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">874</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Топики</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->

                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">60</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Друзья</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->

                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">3.9k</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Посещений</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->
                                </div>
                                <!-- /USER STATS -->
                            </div>
                            <!-- /USER PREVIEW STATS SLIDE -->
                        </div>
                        <!-- /USER PREVIEW STATS SLIDES -->

                        <!-- SOCIAL LINKS -->
                        <div class="social-links small">
                            <!-- SOCIAL LINK -->
                            <a class="social-link small twitter" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-twitter">
                                    <use xlink:href="#svg-twitter"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small instagram" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-instagram">
                                    <use xlink:href="#svg-instagram"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small twitch" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-twitch">
                                    <use xlink:href="#svg-twitch"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small discord" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-discord">
                                    <use xlink:href="#svg-discord"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>
                        <!-- /SOCIAL LINKS -->

                        <!-- USER PREVIEW ACTIONS -->
                        <div class="user-preview-actions">
                            <!-- BUTTON -->
                            <p class="button primary" style="font-family: 'Fira Sans', sans-serif;">Мессенджер</p>
                            <!-- /BUTTON -->

                            <!-- BUTTON -->
                            <p class="button bg-danger" style="font-family: 'Fira Sans', sans-serif;">Удалить</p>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /USER PREVIEW ACTIONS -->
                    </div>
                    <!-- /USER PREVIEW INFO -->
                </div>
                <!-- /USER PREVIEW -->

                <!-- USER PREVIEW -->
                <div class="user-preview">
                    <!-- USER PREVIEW COVER -->
                    <figure class="user-preview-cover liquid">
                        <img src="/img/cover/04.jpg" alt="cover-04">
                    </figure>
                    <!-- /USER PREVIEW COVER -->

                    <!-- USER PREVIEW INFO -->
                    <div class="user-preview-info">
                        <!-- USER SHORT DESCRIPTION -->
                        <div class="user-short-description">
                            <!-- USER SHORT DESCRIPTION AVATAR -->
                            <a class="user-short-description-avatar user-avatar medium" href="#">
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
                                    <div class="hexagon-image-82-90" data-src="/img/avatar/05.jpg"></div>
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
                                    <p class="user-avatar-badge-text">12</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </a>
                            <!-- /USER SHORT DESCRIPTION AVATAR -->

                            <!-- USER SHORT DESCRIPTION TITLE -->
                            <p class="user-short-description-title"><a href="#">NekoBebop</a></p>
                            <!-- /USER SHORT DESCRIPTION TITLE -->
                        </div>
                        <!-- /USER SHORT DESCRIPTION -->

                        <!-- BADGE LIST -->
                        <div class="badge-list small">
                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/silver-s.png" alt="badge-silver-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/fcultivator-s.png" alt="badge-fcultivator-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/scientist-s.png" alt="badge-scientist-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/rmachine-s.png" alt="badge-rmachine-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <a class="badge-item" href="#">
                                <img src="/img/badge/blank-s.png" alt="badge-blank-s">
                                <!-- BADGE ITEM TEXT -->
                                <p class="badge-item-text">+29</p>
                                <!-- /BADGE ITEM TEXT -->
                            </a>
                            <!-- /BADGE ITEM -->
                        </div>
                        <!-- /BADGE LIST -->

                        <!-- USER PREVIEW STATS SLIDES -->
                        <div id="user-preview-stats-slides-01" class="user-preview-stats-slides">
                            <!-- USER PREVIEW STATS SLIDE -->
                            <div class="user-preview-stats-slide">
                                <!-- USER STATS -->
                                <div class="user-stats">
                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">874</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Топики</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->

                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">60</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Друзья</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->

                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">3.9k</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Посещений</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->
                                </div>
                                <!-- /USER STATS -->
                            </div>
                            <!-- /USER PREVIEW STATS SLIDE -->
                        </div>
                        <!-- /USER PREVIEW STATS SLIDES -->

                        <!-- SOCIAL LINKS -->
                        <div class="social-links small">
                            <!-- SOCIAL LINK -->
                            <a class="social-link small twitter" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-twitter">
                                    <use xlink:href="#svg-twitter"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small instagram" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-instagram">
                                    <use xlink:href="#svg-instagram"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small twitch" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-twitch">
                                    <use xlink:href="#svg-twitch"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small discord" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-discord">
                                    <use xlink:href="#svg-discord"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>
                        <!-- /SOCIAL LINKS -->

                        <!-- USER PREVIEW ACTIONS -->
                        <div class="user-preview-actions">
                            <!-- BUTTON -->
                            <p class="button primary" style="font-family: 'Fira Sans', sans-serif;">Мессенджер</p>
                            <!-- /BUTTON -->

                            <!-- BUTTON -->
                            <p class="button bg-danger" style="font-family: 'Fira Sans', sans-serif;">Удалить</p>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /USER PREVIEW ACTIONS -->
                    </div>
                    <!-- /USER PREVIEW INFO -->
                </div>
                <!-- /USER PREVIEW -->

                <!-- USER PREVIEW -->
                <div class="user-preview">
                    <!-- USER PREVIEW COVER -->
                    <figure class="user-preview-cover liquid">
                        <img src="/img/cover/04.jpg" alt="cover-04">
                    </figure>
                    <!-- /USER PREVIEW COVER -->

                    <!-- USER PREVIEW INFO -->
                    <div class="user-preview-info">
                        <!-- USER SHORT DESCRIPTION -->
                        <div class="user-short-description">
                            <!-- USER SHORT DESCRIPTION AVATAR -->
                            <a class="user-short-description-avatar user-avatar medium" href="#">
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
                                    <div class="hexagon-image-82-90" data-src="/img/avatar/05.jpg"></div>
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
                                    <p class="user-avatar-badge-text">12</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </a>
                            <!-- /USER SHORT DESCRIPTION AVATAR -->

                            <!-- USER SHORT DESCRIPTION TITLE -->
                            <p class="user-short-description-title"><a href="#">NekoBebop</a></p>
                            <!-- /USER SHORT DESCRIPTION TITLE -->
                        </div>
                        <!-- /USER SHORT DESCRIPTION -->

                        <!-- BADGE LIST -->
                        <div class="badge-list small">
                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/silver-s.png" alt="badge-silver-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/fcultivator-s.png" alt="badge-fcultivator-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/scientist-s.png" alt="badge-scientist-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <div class="badge-item">
                                <img src="/img/badge/rmachine-s.png" alt="badge-rmachine-s">
                            </div>
                            <!-- /BADGE ITEM -->

                            <!-- BADGE ITEM -->
                            <a class="badge-item" href="#">
                                <img src="/img/badge/blank-s.png" alt="badge-blank-s">
                                <!-- BADGE ITEM TEXT -->
                                <p class="badge-item-text">+29</p>
                                <!-- /BADGE ITEM TEXT -->
                            </a>
                            <!-- /BADGE ITEM -->
                        </div>
                        <!-- /BADGE LIST -->

                        <!-- USER PREVIEW STATS SLIDES -->
                        <div id="user-preview-stats-slides-01" class="user-preview-stats-slides">
                            <!-- USER PREVIEW STATS SLIDE -->
                            <div class="user-preview-stats-slide">
                                <!-- USER STATS -->
                                <div class="user-stats">
                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">874</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Топики</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->

                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">60</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Друзья</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->

                                    <!-- USER STAT -->
                                    <div class="user-stat">
                                        <!-- USER STAT TITLE -->
                                        <p class="user-stat-title">3.9k</p>
                                        <!-- /USER STAT TITLE -->

                                        <!-- USER STAT TEXT -->
                                        <p class="user-stat-text" style="font-family: 'Fira Sans', sans-serif;">Посещений</p>
                                        <!-- /USER STAT TEXT -->
                                    </div>
                                    <!-- /USER STAT -->
                                </div>
                                <!-- /USER STATS -->
                            </div>
                            <!-- /USER PREVIEW STATS SLIDE -->
                        </div>
                        <!-- /USER PREVIEW STATS SLIDES -->

                        <!-- SOCIAL LINKS -->
                        <div class="social-links small">
                            <!-- SOCIAL LINK -->
                            <a class="social-link small twitter" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-twitter">
                                    <use xlink:href="#svg-twitter"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small instagram" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-instagram">
                                    <use xlink:href="#svg-instagram"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small twitch" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-twitch">
                                    <use xlink:href="#svg-twitch"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link small discord" href="#">
                                <!-- SOCIAL LINK ICON -->
                                <svg class="social-link-icon icon-discord">
                                    <use xlink:href="#svg-discord"></use>
                                </svg>
                                <!-- /SOCIAL LINK ICON -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>
                        <!-- /SOCIAL LINKS -->

                        <!-- USER PREVIEW ACTIONS -->
                        <div class="user-preview-actions">
                            <!-- BUTTON -->
                            <p class="button primary" style="font-family: 'Fira Sans', sans-serif;">Мессенджер</p>
                            <!-- /BUTTON -->

                            <!-- BUTTON -->
                            <p class="button bg-danger" style="font-family: 'Fira Sans', sans-serif;">Удалить</p>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /USER PREVIEW ACTIONS -->
                    </div>
                    <!-- /USER PREVIEW INFO -->
                </div>
                <!-- /USER PREVIEW -->
            </div>
            <!-- /GRID -->
        </section>
        <!-- /SECTION -->
    </div>
    <!-- /CONTENT GRID -->
@endsection

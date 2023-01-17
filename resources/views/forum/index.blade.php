@extends('forum.layout.main')

@section('title', 'Forum | Главная страница')

@section('content')
    <!-- FLOATY BAR -->
    <aside class="floaty-bar">
        <!-- BAR ACTIONS -->
        <div class="bar-actions">
            <!-- PROGRESS STAT -->
            <div class="progress-stat">
                <!-- BAR PROGRESS WRAP -->
                <div class="bar-progress-wrap">
                    <!-- BAR PROGRESS INFO -->
                    <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
                    <!-- /BAR PROGRESS INFO -->
                </div>
                <!-- /BAR PROGRESS WRAP -->

                <!-- PROGRESS STAT BAR -->
                <div id="logged-user-level-cp" class="progress-stat-bar"></div>
                <!-- /PROGRESS STAT BAR -->
            </div>
            <!-- /PROGRESS STAT -->
        </div>
        <!-- /BAR ACTIONS -->

        <!-- BAR ACTIONS -->
        <div class="bar-actions">
            <!-- ACTION LIST -->
            <div class="action-list dark">
                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="marketplace-cart.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-shopping-bag">
                        <use xlink:href="#svg-shopping-bag"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="hub-profile-requests.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-friend">
                        <use xlink:href="#svg-friend"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="hub-profile-messages.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-messages">
                        <use xlink:href="#svg-messages"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item unread" href="hub-profile-notifications.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-notification">
                        <use xlink:href="#svg-notification"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->
            </div>
            <!-- /ACTION LIST -->

            <!-- ACTION ITEM WRAP -->
            <a class="action-item-wrap" href="hub-profile-info.html">
                <!-- ACTION ITEM -->
                <div class="action-item dark">
                    <!-- ACTION ITEM ICON -->
                    <svg class="action-item-icon icon-settings">
                        <use xlink:href="#svg-settings"></use>
                    </svg>
                    <!-- /ACTION ITEM ICON -->
                </div>
                <!-- /ACTION ITEM -->
            </a>
            <!-- /ACTION ITEM WRAP -->
        </div>
        <!-- /BAR ACTIONS -->
    </aside>
    <!-- /FLOATY BAR -->

    <!-- CONTENT GRID -->
    <div class="content-grid">
        <!-- SECTION BANNER -->
        <div class="section-banner">
            <!-- SECTION BANNER ICON -->
            <img class="section-banner-icon" src="img/banner/forums-icon.png" alt="forums-icon">
            <!-- /SECTION BANNER ICON -->

            <!-- SECTION BANNER TITLE -->
            <p class="section-banner-title">Forum</p>
            <!-- /SECTION BANNER TITLE -->

            <!-- SECTION BANNER TEXT -->
            <p class="section-banner-text" style="font-family: 'Fira Sans', sans-serif;">Форум посвященный социальной инженерии</p>
            <!-- /SECTION BANNER TEXT -->
        </div>
        <!-- /SECTION BANNER -->

        <!-- SECTION FILTERS BAR -->
        <div class="section-filters-bar v7">
            <!-- SECTION FILTERS BAR ACTIONS -->
            <div class="section-filters-bar-actions">
                <!-- SECTION FILTERS BAR INFO -->
                <div class="section-filters-bar-info">
                    <!-- SECTION FILTERS BAR TITLE -->
                    <p class="section-filters-bar-title"><a href="/">Forum</a></p>
                    <!-- /SECTION FILTERS BAR TITLE -->
                </div>
                <!-- /SECTION FILTERS BAR INFO -->
            </div>
            <!-- /SECTION FILTERS BAR ACTIONS -->

            <!-- SECTION FILTERS BAR ACTIONS -->
            <div class="section-filters-bar-actions">
                <!-- FORM -->
                <form class="form">
                    <!-- FORM ITEM -->
                    <div class="form-item split">
                        <!-- FORM INPUT -->
                        <div class="form-input small">
                            <label for="forum-search">Поиск...</label>
                            <input type="text" id="forum-search" name="forum_search">
                        </div>
                        <!-- /FORM INPUT -->

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
                    <!-- /FORM ITEM -->
                </form>
                <!-- /FORM -->
            </div>
            <!-- /SECTION FILTERS BAR ACTIONS -->
        </div>
        <!-- /SECTION FILTERS BAR -->

        <!-- TABLE -->
        <div class="table table-forum-category">
            <!-- TABLE HEADER -->
            <div class="table-header">
                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif;">Категория</p>
                    <!-- /TABLE HEADER TITLE -->
                </div>
                <!-- /TABLE HEADER COLUMN -->

                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column centered padded-medium">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif;">Топики</p>
                    <!-- /TABLE HEADER TITLE -->
                </div>
                <!-- /TABLE HEADER COLUMN -->

                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column centered padded-medium">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif;">Сообщения</p>
                    <!-- /TABLE HEADER TITLE -->
                </div>
                <!-- /TABLE HEADER COLUMN -->

                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column padded-big-left">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif;">Последнии топики</p>
                    <!-- /TABLE HEADER TITLE -->
                </div>
                <!-- /TABLE HEADER COLUMN -->
            </div>
            <!-- /TABLE HEADER -->

            <!-- TABLE BODY -->
            <div class="table-body">
                <!-- TABLE ROW -->
                @foreach($viewDataList as $item)
                <div class="table-row big">
                    <!-- TABLE COLUMN -->
                    <div class="table-column">
                        <!-- FORUM CATEGORY -->
                        <div class="forum-category">
                            <!-- FORUM CATEGORY IMAGE -->
                            <a href="forums-category.html">
                                <img class="forum-category-image" src="{{ $item->getIcon() }}" alt="category-01">
                            </a>
                            <!-- /FORUM CATEGORY IMAGE -->

                            <!-- FORUM CATEGORY INFO -->
                            <div class="forum-category-info">
                                <!-- FORUM CATEGORY TITLE -->
                                <p class="forum-category-title"><a href="forums-category.html" style="font-family: 'Fira Sans', sans-serif;">{{ $item->getTitle() }}</a></p>
                                <!-- /FORUM CATEGORY TITLE -->

                                <!-- FORUM CATEGORY TEXT -->
                                <p class="forum-category-text" style="font-family: 'Fira Sans', sans-serif;">{{ $item->getDescription() }}</p>
                                <!-- /FORUM CATEGORY TEXT -->
                            </div>
                            <!-- /FORUM CATEGORY INFO -->
                        </div>
                        <!-- /FORUM CATEGORY -->
                    </div>
                    <!-- /TABLE COLUMN -->

                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded-medium">
                        <!-- TABLE TITLE -->
                        <p class="table-title">44</p>
                        <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->

                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded-medium">
                        <!-- TABLE TITLE -->
                        <p class="table-title">236</p>
                        <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->

                    <!-- TABLE COLUMN -->
                    <div class="table-column padded-big-left">
                        <!-- TABLE LINK -->
                        <a class="table-link" href="forums-discussion.html">What's your favourite food in the world?</a>
                        <!-- /TABLE LINK -->

                        <!-- TABLE LINK -->
                        <a class="table-link" href="forums-discussion.html">Share a picture of your city or town and let's travel together!</a>
                        <!-- /TABLE LINK -->

                        <!-- TABLE LINK -->
                        <a class="table-link" href="forums-discussion.html">Do you think we'll ever get flying cars in the future?</a>
                        <!-- /TABLE LINK -->
                    </div>
                    <!-- /TABLE COLUMN -->
                </div>
                @endforeach
                <!-- /TABLE ROW -->
            </div>
            <!-- /TABLE BODY -->
        </div>
        <!-- /TABLE -->
    </div>
    <!-- /CONTENT GRID -->
@endsection

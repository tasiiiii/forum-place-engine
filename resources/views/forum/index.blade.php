@extends('forum.layout.main')

@section('title', 'Forum | Главная страница')

@section('content')
    @foreach($forumSectionViewData as $forumSectionViewData)
        <!-- TABLE -->
        <div class="table table-forum-category">
            <!-- TABLE HEADER -->
            <div class="table-header">
                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif;">{{ $forumSectionViewData->getTitle() }}</p>
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
                @foreach($forumSectionViewData->getCategories() as $item)
                    <div class="table-row big">
                        <!-- TABLE COLUMN -->
                        <div class="table-column">
                            <!-- FORUM CATEGORY -->
                            <div class="forum-category">
                                <!-- FORUM CATEGORY IMAGE -->
                                <a href="{{ $item->getForumCategoryLink() }}">
                                    <img class="forum-category-image" src="{{ $item->getIcon() }}" alt="category-01">
                                </a>
                                <!-- /FORUM CATEGORY IMAGE -->

                                <!-- FORUM CATEGORY INFO -->
                                <div class="forum-category-info">
                                    <!-- FORUM CATEGORY TITLE -->
                                    <p class="forum-category-title"><a href="{{ $item->getForumCategoryLink() }}" style="font-family: 'Fira Sans', sans-serif;">{{ $item->getTitle() }}</a></p>
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
                            <p class="table-title">{{ $item->getTopicsCounter() }}</p>
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
    @endforeach
@endsection

@extends('forum.layout.main')

@section('title', 'Forum | Категория')

@section('content')
    <!-- TABLE -->
    <div class="table table-forum-discussion">
        <!-- TABLE HEADER -->
        <div class="table-header">
            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title">Discussion</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded-medium">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title">Voices</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded-medium">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title">Replies</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column padded-big-left">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title">Activity</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->
        </div>
        <!-- /TABLE HEADER -->

        <!-- TABLE BODY -->
        <div class="table-body">
            <!-- TABLE ROW -->
            <div class="table-row mid">
                <!-- TABLE COLUMN -->
                <div class="table-column">
                    <!-- DISCUSSION PREVIEW -->
                    <div class="discussion-preview pinned">
                        <!-- DISCUSSION PREVIEW TITLE -->
                        <a class="discussion-preview-title" href="#">Let's discuss the current state of the Comics Cinematic Universe</a>
                        <!-- /DISCUSSION PREVIEW TITLE -->

                        <!-- PAGE ITEMS -->
                        <div class="page-items">
                            <!-- PAGE ITEM -->
                            <a class="page-item" href="#">01</a>
                            <!-- /PAGE ITEM -->

                            <!-- PAGE ITEM -->
                            <a class="page-item" href="#">02</a>
                            <!-- /PAGE ITEM -->

                            <!-- PAGE ITEM -->
                            <a class="page-item" href="#">03</a>
                            <!-- /PAGE ITEM -->

                            <!-- PAGE ITEM -->
                            <p class="page-item void">...</p>
                            <!-- /PAGE ITEM -->

                            <!-- PAGE ITEM -->
                            <a class="page-item" href="#">44</a>
                            <!-- /PAGE ITEM -->

                            <!-- PAGE ITEM -->
                            <a class="page-item" href="#">45</a>
                            <!-- /PAGE ITEM -->

                            <!-- PAGE ITEM -->
                            <a class="page-item" href="#">46</a>
                            <!-- /PAGE ITEM -->
                        </div>
                        <!-- /PAGE ITEMS -->

                        <!-- DISCUSSION PREVIEW META -->
                        <div class="discussion-preview-meta">
                            <!-- DISCUSSION PREVIEW META TEXT -->
                            <p class="discussion-preview-meta-text">Started by</p>
                            <!-- /DISCUSSION PREVIEW META TEXT -->

                            <!-- USER AVATAR -->
                            <a class="user-avatar micro no-border" href="#">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-18-20" data-src="/img/avatar/07.jpg"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- DISCUSSION PREVIEW META TEXT -->
                            <p class="discussion-preview-meta-text"><a href="#">Sarah Diamond</a> 2 months ago</p>
                            <!-- /DISCUSSION PREVIEW META TEXT -->
                        </div>
                        <!-- /DISCUSSION PREVIEW META -->
                    </div>
                    <!-- /DISCUSSION PREVIEW -->
                </div>
                <!-- /TABLE COLUMN -->

                <!-- TABLE COLUMN -->
                <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">398</p>
                    <!-- /TABLE TITLE -->
                </div>
                <!-- /TABLE COLUMN -->

                <!-- TABLE COLUMN -->
                <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">941</p>
                    <!-- /TABLE TITLE -->
                </div>
                <!-- /TABLE COLUMN -->

                <!-- TABLE COLUMN -->
                <div class="table-column padded-big-left">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <a class="user-status-avatar" href="#">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-30-32" data-src="/img/avatar/05.jpg"></div>
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
                        <p class="user-status-title"><a class="bold" href="#">Neko Bebop</a></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">1 hour, 36 minutes ago</p>
                        <!-- /USER STATUS TEXT -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->
        </div>
        <!-- /TABLE BODY -->
    </div>
    <!-- /TABLE -->
@endsection

@extends('forum.layout.main')

@section('title', 'Forum | Топик')

@section('content')
    <!-- GRID -->
    <div class="grid grid-9-3">
        <!-- FORUM CONTENT -->
        <div class="forum-content">
            <!-- FORUM POST HEADER -->
            <div class="forum-post-header">
                <!-- FORUM POST HEADER TITLE -->
                <p class="forum-post-header-title" style="font-family: 'Fira Sans', sans-serif;">Автор</p>
                <!-- /FORUM POST HEADER TITLE -->

                <!-- FORUM POST HEADER TITLE -->
                <p class="forum-post-header-title" style="font-family: 'Fira Sans', sans-serif;">Публикация</p>
                <!-- /FORUM POST HEADER TITLE -->
            </div>
            <!-- /FORUM POST HEADER -->

            <!-- FORUM POST LIST -->
            <div class="forum-post-list">
                <!-- FORUM POST -->
                <div class="forum-post">
                    <!-- FORUM POST META -->
                    <div class="forum-post-meta">
                        <!-- FORUM POST TIMESTAMP -->
                        <p class="forum-post-timestamp">{{ $forumTopicViewData->getCreatedAt() }}</p>
                        <!-- /FORUM POST TIMESTAMP -->

                        <!-- FORUM POST ACTIONS -->
                        <div class="forum-post-actions">
                            <!-- FORUM POST ACTION -->
                            <p class="forum-post-action light" style="font-family: 'Fira Sans', sans-serif;">Жалоба</p>
                            <!-- /FORUM POST ACTION -->

                            <!-- FORUM POST ACTION -->
                            <p class="forum-post-action" style="font-family: 'Fira Sans', sans-serif;">Поделиться</p>
                            <!-- /FORUM POST ACTION -->
                        </div>
                        <!-- /FORUM POST ACTIONS -->
                    </div>
                    <!-- /FORUM POST META -->

                    <!-- FORUM POST CONTENT -->
                    <div class="forum-post-content">
                        <!-- FORUM POST USER -->
                        <div class="forum-post-user">
                            <!-- USER AVATAR -->
                            <a class="user-avatar no-outline" href="#">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-68-74" data-src="{{ $forumTopicViewData->getCreator()->getAvatar() }}"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-progress-84-92"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-border-84-92"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->

                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                    <!-- USER AVATAR BADGE BORDER -->
                                    <div class="user-avatar-badge-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-28-32"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE BORDER -->

                                    <!-- USER AVATAR BADGE CONTENT -->
                                    <div class="user-avatar-badge-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-dark-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE CONTENT -->

                                    <!-- USER AVATAR BADGE TEXT -->
                                    <p class="user-avatar-badge-text">1</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <a class="user-avatar small no-outline" href="#">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-30-32" data-src="{{ $forumTopicViewData->getCreator()->getAvatar() }}"></div>
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
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- FORUM POST USER TITLE -->
                            <p class="forum-post-user-title"><a href="#">{{ $forumTopicViewData->getCreator()->getName() }}</a></p>
                            <!-- /FORUM POST USER TITLE -->
                        </div>
                        <!-- /FORUM POST USER -->

                        <!-- FORUM POST INFO -->
                        <div class="forum-post-info">
                            <h3 style="font-family: 'Fira Sens', sans-serif; margin-bottom: 30px;">{{ $forumTopicViewData->getTitle() }}</h3>

                            {!! $forumTopicViewData->getContent() !!}
                        </div>
                        <!-- /FORUM POST INFO -->
                    </div>
                    <!-- /FORUM POST CONTENT -->
                </div>
                <!-- /FORUM POST -->

                @foreach($forumTopicViewData->getForumMessages() as $forumMessages)
                <!-- FORUM POST -->
                <div class="forum-post">
                    <!-- FORUM POST META -->
                    <div class="forum-post-meta">
                        <!-- FORUM POST TIMESTAMP -->
                        <p class="forum-post-timestamp">{{ $forumMessages->getCreatedAt() }}</p>
                        <!-- /FORUM POST TIMESTAMP -->

                        <!-- FORUM POST ACTIONS -->
                        <div class="forum-post-actions">
                            <!-- FORUM POST ACTION -->
                            <p class="forum-post-action light" style="font-family: 'Fira Sans', sans-serif;">Жалоба</p>
                            <!-- /FORUM POST ACTION -->
                        </div>
                        <!-- /FORUM POST ACTIONS -->
                    </div>
                    <!-- /FORUM POST META -->

                    <!-- FORUM POST CONTENT -->
                    <div class="forum-post-content">
                        <!-- FORUM POST USER -->
                        <div class="forum-post-user">
                            <!-- USER AVATAR -->
                            <a class="user-avatar no-outline" href="#">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-68-74" data-src="{{ $forumMessages->getCreator()->getAvatar() }}"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-progress-84-92"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-border-84-92"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->

                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                    <!-- USER AVATAR BADGE BORDER -->
                                    <div class="user-avatar-badge-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-28-32"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE BORDER -->

                                    <!-- USER AVATAR BADGE CONTENT -->
                                    <div class="user-avatar-badge-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-dark-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE CONTENT -->

                                    <!-- USER AVATAR BADGE TEXT -->
                                    <p class="user-avatar-badge-text">1</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- USER AVATAR -->
                            <a class="user-avatar small no-outline" href="#">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-30-32" data-src="{{ $forumMessages->getCreator()->getAvatar() }}"></div>
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
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- FORUM POST USER TITLE -->
                            <p class="forum-post-user-title"><a href="#">{{ $forumMessages->getCreator()->getName() }}</a></p>
                            <!-- /FORUM POST USER TITLE -->
                        </div>
                        <!-- /FORUM POST USER -->

                        <!-- FORUM POST INFO -->
                        <div class="forum-post-info" style="color: #fff;">
                            {!! $forumMessages->getContent() !!}
                        </div>
                        <!-- /FORUM POST INFO -->
                    </div>
                    <!-- /FORUM POST CONTENT -->
                </div>
                <!-- /FORUM POST -->
                @endforeach
            </div>
            <!-- /FORUM POST LIST -->

            @if (count($forumTopicViewData->getForumMessages()))
                @include('widget.pagination')
            @endif

            <!-- QUICK POST -->
            <div class="quick-post medium">
                <!-- QUICK POST HEADER -->
                <div class="quick-post-header">
                    <!-- QUICK POST HEADER TITLE -->
                    <p class="quick-post-header-title" style="font-family: 'Fira Sans', sans-serif;">Сообщение</p>
                    <!-- /QUICK POST HEADER TITLE -->
                </div>
                <!-- /QUICK POST HEADER -->

                <!-- QUICK POST BODY -->
                <div class="quick-post-body">
                    <!-- FORM -->
                    <form class="form">
                        <!-- FORM ROW -->
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM TEXTAREA -->
                                <div class="form-textarea">
                                    <textarea id="forum-post-text" name="forum-post-text" style="font-family: 'Fira Sans', sans-serif;"></textarea>
                                    <!-- FORM TEXTAREA LIMIT TEXT -->
                                    <p class="form-textarea-limit-text">998/1000</p>
                                    <!-- /FORM TEXTAREA LIMIT TEXT -->
                                </div>
                                <!-- /FORM TEXTAREA -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                        <!-- /FORM ROW -->
                    </form>
                    <!-- /FORM -->
                </div>
                <!-- /QUICK POST BODY -->

                <!-- QUICK POST FOOTER -->
                <div class="quick-post-footer">
                    <!-- QUICK POST FOOTER ACTIONS -->
                    <div class="quick-post-footer-actions">
                        <!-- QUICK POST FOOTER ACTION -->
                        <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert Photo">
                            <!-- QUICK POST FOOTER ACTION ICON -->
                            <svg class="quick-post-footer-action-icon icon-camera">
                                <use xlink:href="#svg-camera"></use>
                            </svg>
                            <!-- /QUICK POST FOOTER ACTION ICON -->
                        </div>
                        <!-- /QUICK POST FOOTER ACTION -->

                        <!-- QUICK POST FOOTER ACTION -->
                        <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert GIF">
                            <!-- QUICK POST FOOTER ACTION ICON -->
                            <svg class="quick-post-footer-action-icon icon-gif">
                                <use xlink:href="#svg-gif"></use>
                            </svg>
                            <!-- /QUICK POST FOOTER ACTION ICON -->
                        </div>
                        <!-- /QUICK POST FOOTER ACTION -->
                    </div>
                    <!-- /QUICK POST FOOTER ACTIONS -->

                    <!-- QUICK POST FOOTER ACTIONS -->
                    <div class="quick-post-footer-actions">
                        <!-- BUTTON -->
                        <p class="button void">Discard</p>
                        <!-- /BUTTON -->

                        <!-- BUTTON -->
                        <p class="button secondary">Post Reply</p>
                        <!-- /BUTTON -->
                    </div>
                    <!-- /QUICK POST FOOTER ACTIONS -->
                </div>
                <!-- /QUICK POST FOOTER -->
            </div>
            <!-- /QUICK POST -->
        </div>
        <!-- /FORUM CONTENT -->

        <!-- FORUM SIDEBAR -->
        <div class="forum-sidebar grid-column">
            <!-- STATS DECORATION -->
            <div class="stats-decoration secondary">
                <!-- STATS DECORATION ICON WRAP -->
                <div class="stats-decoration-icon-wrap">
                    <!-- STATS DECORATION ICON -->
                    <svg class="stats-decoration-icon icon-thumbs-up">
                        <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /STATS DECORATION ICON -->
                </div>
                <!-- /STATS DECORATION ICON WRAP -->

                <!-- STATS DECORATION TITLE -->
                <p class="stats-decoration-title">{{ $forumTopicViewData->getReactionCounter() }}</p>
                <!-- /STATS DECORATION TITLE -->

                <!-- STATS DECORATION TEXT -->
                <p class="stats-decoration-text" style="font-family: 'Fira Sans', sans-serif;">Реакция</p>
                <!-- /STATS DECORATION TEXT -->
            </div>
            <!-- /STATS DECORATION -->

            <!-- STATS DECORATION -->
            <div class="stats-decoration primary">
                <!-- STATS DECORATION ICON WRAP -->
                <div class="stats-decoration-icon-wrap">
                    <!-- STATS DECORATION ICON -->
                    <svg class="stats-decoration-icon icon-members">
                        <use xlink:href="#svg-members"></use>
                    </svg>
                    <!-- /STATS DECORATION ICON -->
                </div>
                <!-- /STATS DECORATION ICON WRAP -->

                <!-- STATS DECORATION TITLE -->
                <p class="stats-decoration-title">{{ $forumTopicViewData->getSharedCounter() }}</p>
                <!-- /STATS DECORATION TITLE -->

                <!-- STATS DECORATION TEXT -->
                <p class="stats-decoration-text" style="font-family: 'Fira Sans', sans-serif;">Скинули</p>
                <!-- /STATS DECORATION TEXT -->
            </div>
            <!-- /STATS DECORATION -->
        </div>
        <!-- /FORUM SIDEBAR -->
    </div>
    <!-- /GRID -->
@endsection

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
                <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif">Топик</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded-medium">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif">Кол-во сообщений</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded-medium">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif">Форки</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column padded-big-left">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif">Последняя активность</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->
        </div>
        <!-- /TABLE HEADER -->

        <!-- TABLE BODY -->
        <div class="table-body">
            @include('forum.category.topic-list', ['forumTopics' => $forumTopicPinnedViewData, 'isPinned' => true])
        </div>
        <!-- /TABLE BODY -->
    </div>
    <!-- /TABLE -->

    <!-- TABLE -->
    <div class="table table-forum-discussion">
        <!-- TABLE HEADER -->
        <div class="table-header">
            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif">Топик</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded-medium">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif">Кол-во сообщений</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded-medium">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif">Форки</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column padded-big-left">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title" style="font-family: 'Fira Sans', sans-serif">Последняя активность</p>
                <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->
        </div>
        <!-- /TABLE HEADER -->

        <!-- TABLE BODY -->
        <div class="table-body" id="topics-content"></div>
        <!-- /TABLE BODY -->
    </div>
    <!-- /TABLE -->
@endsection

@section('js')
    <script>
        const TopicManager = {
            page: 1,
            topicsContent: '#topics-content',
            load: () => {
                $.ajax({
                    type: 'GET',
                    url: '{{ route('topic_list_ajax', ['alias' => $alias]) }}',
                    data: {
                        page: TopicManager.page
                    },
                    success: res => {
                        $(TopicManager.topicsContent).append(res.data);
                    }
                })
            }
        }

        $(document).ready(e => {
            TopicManager.load();
        });
    </script>
@endsection

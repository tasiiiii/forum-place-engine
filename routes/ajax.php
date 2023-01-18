<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'forum'], function () {
    Route::get('topic-list', [\App\Http\Controllers\Ajax\Forum\TopicList\Controller::class, 'run'])->name('topic_list_ajax');
});

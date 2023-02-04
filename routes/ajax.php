<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'registration'], function () {
    Route::get('name-checker', [\App\Http\Controllers\Ajax\Common\Registration\NameChecker\Controller::class, 'run'])->name('name_checker_ajax');
});

Route::group(['prefix' => 'forum'], function () {
    Route::get('topic-list/{alias}', [\App\Http\Controllers\Ajax\Forum\Topic\ShowList\Controller::class, 'run'])->name('topic_list_ajax');
    Route::post('topic/reaction/create', [\App\Http\Controllers\Ajax\Forum\Topic\Reaction\Create\Controller::class, 'run'])->name('create_topic_reaction');
});

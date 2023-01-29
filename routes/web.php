<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Web\Forum\Index\Controller::class, 'run'])->name('forum_index');

Route::group(['prefix' => 'profile'], function () {
    Route::get('', [\App\Http\Controllers\Web\Common\Profile\Show\Controller::class, 'run'])->name('profile_show');
});

Route::group(['prefix' => 'forum'], function () {
    Route::get('category/{alias}', [\App\Http\Controllers\Web\Forum\Category\Controller::class, 'run'])->name('forum_category');
    Route::get('topic/{id}', [\App\Http\Controllers\Web\Forum\Topic\Show\Controller::class, 'run'])->name('forum_topic_show');
});

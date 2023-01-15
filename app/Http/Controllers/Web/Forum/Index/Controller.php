<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Controller extends BaseController
{
    public function run(): Factory|View|Application
    {
        return view('forum.index');
    }
}

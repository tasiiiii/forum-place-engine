<?php

namespace App\Http\Controllers\Web\Forum\Category;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

class Controller extends BaseController
{
    public function run(): View
    {
        return view('forum.category');
    }
}

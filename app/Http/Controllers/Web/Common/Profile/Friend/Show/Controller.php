<?php

namespace App\Http\Controllers\Web\Common\Profile\Friend\Show;

use App\Http\Controllers\BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    public function run(): View
    {
        return view('common.profile.friend.show');
    }
}

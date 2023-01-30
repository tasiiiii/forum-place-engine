<?php

namespace App\Http\Controllers\Web\Common\Login;

use App\Http\Controllers\BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    public function page(): View
    {
        return view('common.login.form');
    }
}

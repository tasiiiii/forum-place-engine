<?php

namespace App\Http\Controllers\Web\Common\PasswordReset\StepTwo;

use Illuminate\View\View;

class Controller
{
    public function page(): View
    {
        return view('common.password-reset.step-two.form');
    }

    public function form(): void
    {

    }
}

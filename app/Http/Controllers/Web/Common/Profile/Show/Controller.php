<?php

namespace App\Http\Controllers\Web\Common\Profile\Show;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

class Controller extends BaseController
{
    public function __construct(
        private readonly ProfileViewBuilder $profileViewBuilder
    )
    {}

    public function run(): View
    {
        return view('common.profile.show', [
            'profileViewData' => $this->profileViewBuilder->build(),
        ]);
    }
}

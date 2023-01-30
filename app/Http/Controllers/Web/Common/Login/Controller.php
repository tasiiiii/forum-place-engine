<?php

namespace App\Http\Controllers\Web\Common\Login;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\User\Action\LoginAction;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Web\Common\Login\Request;
use App\UI\Flash\Enum\FlashEnum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class Controller extends BaseController
{
    public function __construct(
        private readonly LoginAction $loginAction
    )
    {}

    public function page(): View
    {
        return view('common.login.form');
    }

    public function form(Request $request): View|RedirectResponse
    {
        $loginData = $request->getData();

        try {
            $this->loginAction->run($loginData);
            return redirect()->route('forum_index');
        } catch (ApplicationException $e) {
            Session::flash(FlashEnum::Error->value, $e->getMessage());
        }

        return view('common.login.form');
    }
}

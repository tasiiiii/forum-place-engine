<?php

namespace App\Http\Controllers\Web\Common\PasswordReset\StepOne;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\User\Action\PasswordResetStepOneAction;
use App\Http\Requests\Web\Common\PasswordReset\StepOne\Request;
use App\UI\Flash\Enum\FlashEnum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class Controller
{
    public function __construct(
        private readonly PasswordResetStepOneAction $resetPasswordStepOneAction
    )
    {}

    public function page(): View
    {
        return view('common.password-reset.step-one.form');
    }

    public function form(Request $request): View|RedirectResponse
    {
        $data = $request->getData();

        try {
            $this->resetPasswordStepOneAction->run($data);
            Session::flash(FlashEnum::Success->value, 'Код доступа выслан на почту');
        } catch (ApplicationException $e) {
            Session::flash(FlashEnum::Error->value, $e->getMessage());
        }

        return view('common.password-reset.step-one.form', [
            'data' => $data,
        ]);
    }
}

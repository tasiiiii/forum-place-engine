<?php

namespace App\Http\Controllers\Web\Common\PasswordReset\StepTwo;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\User\Action\PasswordResetStepTwoAction;
use App\Http\Requests\Web\Common\PasswordReset\StepTwo\Request;
use App\UI\Flash\Enum\FlashEnum;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class Controller
{
    public function __construct(
        private readonly PasswordResetStepTwoAction $passwordResetStepTwoAction
    )
    {}

    public function page(string $hash): View
    {
        return view('common.password-reset.step-two.form', [
            'hash' => $hash,
        ]);
    }

    public function form(Request $request, string $hash): View|RedirectResponse
    {
        $data = ($request->getData())
            ->setHash($hash);

        try {
            $this->passwordResetStepTwoAction->run($data);
            Session::flash(FlashEnum::Success->value, 'Пароль успешно восстановлен');

            return redirect()->route('login_show');
        } catch (ApplicationException $e) {
            Session::flash(FlashEnum::Error->value, $e->getMessage());
        } catch (Exception) {
            Session::flash(FlashEnum::Error->value, 'Не удалось восстановить пароль');
        }

        return view('common.password-reset.step-two.form', [
            'hash' => $hash,
        ]);
    }
}

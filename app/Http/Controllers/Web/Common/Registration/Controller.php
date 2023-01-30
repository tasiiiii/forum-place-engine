<?php

namespace App\Http\Controllers\Web\Common\Registration;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\User\Action\RegistrationAction;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Web\Common\Registration\Dto\RegistrationData;
use App\Http\Requests\Web\Common\Registration\Request;
use App\UI\Flash\Enum\FlashEnum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class Controller extends BaseController
{
    public function __construct(
        private readonly RegistrationAction $registrationAction
    )
    {}

    public function page(): View
    {
        return view('common.registration.form', [
            'registrationData' => new RegistrationData(),
        ]);
    }

    public function form(Request $request): View|RedirectResponse
    {
        $registrationData = $request->getData();

        try {
            $this->registrationAction->run($registrationData);
            Session::flash(FlashEnum::Success->value, 'Аккаунт успешно создан');
            return redirect()->route('login_show');
        } catch (ApplicationException $e) {
            Session::flash(FlashEnum::Error->value, $e->getMessage());
        }

        return view('common.registration.form', [
            'registrationData' => $registrationData,
        ]);
    }
}

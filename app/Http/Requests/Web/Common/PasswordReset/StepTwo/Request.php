<?php

namespace App\Http\Requests\Web\Common\PasswordReset\StepTwo;

use App\Http\Controllers\Web\Common\PasswordReset\StepTwo\Dto\PasswordResetStepTwoData;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class Request extends FormRequest
{
    #[ArrayShape(['password' => "string"])]
    public function rules(): array
    {
        return [
            'password' => 'required|confirmed|min:8',
        ];
    }

    public function getData(): PasswordResetStepTwoData
    {
        return (new PasswordResetStepTwoData())
            ->setPassword($this->get('password'));
    }
}

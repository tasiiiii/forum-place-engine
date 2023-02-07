<?php

namespace App\Http\Requests\Web\Common\PasswordReset\StepOne;

use App\ForumPlaceEngine\User\Contract\PasswordResetStepOneDataInterface;
use App\Http\Controllers\Web\Common\PasswordReset\StepOne\ValueObject\PasswordResetStepOneData;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class Request extends FormRequest
{
    #[ArrayShape(['email' => "string"])]
    public function rules(): array
    {
        return [
            'email' => 'required|email',
        ];
    }

    public function getData(): PasswordResetStepOneDataInterface
    {
        return new PasswordResetStepOneData($this->get('email'));
    }
}

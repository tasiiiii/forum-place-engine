<?php

namespace App\Http\Requests\Ajax\Common\Registration\PasswordStrengthChecker;

use App\ForumPlaceEngine\User\Contract\PasswordStrengthCheckerDataInterface;
use App\Http\Controllers\Ajax\Common\Registration\PasswordStrengthChecker\ValueObject\PasswordStrengthCheckerData;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class Request extends FormRequest
{
    #[ArrayShape(['password' => "string", 'userData' => "string"])]
    public function rules(): array
    {
        return [
            'password' => 'required',
            'userData' => 'array',
        ];
    }

    public function getData(): PasswordStrengthCheckerDataInterface
    {
        return new PasswordStrengthCheckerData($this->get('password'), $this->get('userData') ?? []);
    }
}

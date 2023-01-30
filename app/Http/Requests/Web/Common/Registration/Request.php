<?php

namespace App\Http\Requests\Web\Common\Registration;

use App\ForumPlaceEngine\User\Contract\RegistrationDataInterface;
use App\Http\Controllers\Web\Common\Registration\Dto\RegistrationData;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class Request extends FormRequest
{
    #[ArrayShape(['name' => "string", 'email' => "string", 'password' => "string"])]
    public function rules(): array
    {
        return [
            'name'     => 'required|min:5',
            'email'    => 'required|email',
            'password' => 'required|confirmed|min:8',
        ];
    }

    public function getData(): RegistrationDataInterface
    {
        return (new RegistrationData())
            ->setName($this->get('name'))
            ->setEmail($this->get('email'))
            ->setPassword($this->get('password'));
    }
}

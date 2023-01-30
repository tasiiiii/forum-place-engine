<?php

namespace App\Http\Requests\Web\Common\Login;

use App\ForumPlaceEngine\User\Contract\LoginDataInterface;
use App\Http\Controllers\Web\Common\Login\Dto\LoginData;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class Request extends FormRequest
{
    #[ArrayShape(['email' => "string", 'password' => "string"])]
    public function rules(): array
    {
        return [
            'email'    => 'required|email',
            'password' => 'required'
        ];
    }

    public function getData(): LoginDataInterface
    {
        return (new LoginData())
            ->setEmail($this->get('email'))
            ->setPassword($this->get('password'));
    }
}

<?php

namespace App\Http\Requests\Ajax\Common\Registration\NameChecker;

use App\Http\Controllers\Ajax\Common\Registration\NameChecker\ValueObject\NameData;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class Request extends FormRequest
{
    #[ArrayShape(['name' => "string"])]
    public function rules(): array
    {
        return [
            'name' => 'required',
        ];
    }

    public function getData(): NameData
    {
        return new NameData($this->get('name'));
    }
}

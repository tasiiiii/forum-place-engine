<?php

namespace App\Http\Controllers\Ajax\Common\Registration\PasswordStrengthChecker;

use App\ForumPlaceEngine\User\Exception\PasswordStrengthCheckerExceptionInterface;
use App\ForumPlaceEngine\User\Service\PasswordStrengthCheckerServiceInterface;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Ajax\Common\Registration\PasswordStrengthChecker\Request;
use Illuminate\Http\JsonResponse;

class Controller extends BaseController
{
    public function __construct(
        private readonly PasswordStrengthCheckerServiceInterface $passwordStrengthCheckerService
    )
    {}

    public function run(Request $request): JsonResponse
    {
        $data = $request->getData();

        try {
            $this->passwordStrengthCheckerService->check($data);
        } catch (PasswordStrengthCheckerExceptionInterface $e) {
            return new JsonResponse([
                'data' => [
                    'isValid' => $e->isValid(),
                    'errors'  => $e->getErrors(),
                ]
            ]);
        }

        return new JsonResponse([
            'data' => [
                'isValid' => true,
            ]
        ]);
    }
}

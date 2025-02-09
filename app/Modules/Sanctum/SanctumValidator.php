<?php

declare(strict_types=1);

namespace App\Modules\Sanctum;

use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class SanctumValidator
{
    public function validateIssueTokenRequest(array $rawData): void
    {
        $validation = Validator::make($rawData, [
            "email" => "required|email",
            "password" => "required|string",
            "device" => "required|string",
        ]);

        if ($validation->fails()) {
            throw new InvalidArgumentException($validation->errors()->first());
        }
    }
}

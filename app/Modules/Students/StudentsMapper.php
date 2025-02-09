<?php

declare(strict_types=1);

namespace App\Modules\Students;

use App\Modules\Common\MyHelpers;

class StudentsMapper
{
    public static function mapFrom(array $data): Student
    {
        return new Student(
            MyHelpers::nullStringToInt($data['id'] ?? null),
            $data['name'],
            $data['email'],
            $data['deleted_at'] ?? null,
            $data['created_at'] ?? now()->toDateTimeString(),
            $data['updated_at']
        );
    }

}

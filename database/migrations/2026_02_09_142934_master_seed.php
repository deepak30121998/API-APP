<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $userSeedValues = [
            [
                "name" => "Admin",
                "email" => "deepakchoudhary@gmail.com",
                "password" => bcrypt("password"),
                "created_at" => now(),
            ]
        ];

        DB::table("users")->insert($userSeedValues);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table("users")->truncate();
    }
};

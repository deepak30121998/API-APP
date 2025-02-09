<?php

namespace App\Http\Controllers;

use App\Modules\Students\StudentsService;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private StudentsService $studentsService;

    public function __construct(
        StudentsService $studentsService
    )
    {
        $this->studentsService = $studentsService;
    }
}

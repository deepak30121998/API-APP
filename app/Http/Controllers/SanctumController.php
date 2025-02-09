<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Modules\Core\HTTPResponseCodes;
use App\Modules\Sanctum\SanctumService;

class SanctumController extends Controller
{
    private SanctumService $sanctumService;

    public function __construct(SanctumService $sanctumService)
    {
        $this->sanctumService = $sanctumService;
    }

    public function issueToken(Request $request): Response
    {
        try {
            $dataArray = ($request->toArray() !== []) ? $request->toArray() : $request->json()->all();

            return new Response([
                $this->sanctumService->issueToken($dataArray),
                HTTPResponseCodes::success["code"]
            ]);
        } catch (Exception $e) {
            return new Response([
                "exception" => get_class($e),
                "message" => $e->getMessage()
            ],

            HTTPResponseCodes::internalServerError["code"]
        );
        }
    }
}

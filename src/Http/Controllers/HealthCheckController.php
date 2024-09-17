<?php

namespace Teggoin\HealthCheck\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HealthCheckController
{
    public function checkDatabaseConnection(): JsonResponse
    {
        try {
            DB::connection()->getPdo();
            return response()->json(['status' => true], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(['status' => false], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

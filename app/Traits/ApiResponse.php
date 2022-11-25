<?php


namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponse
{
    public function returnResponse(
        $success = true,
        $data = [],
        $message = 'success',
        $statusCode = Response::HTTP_OK,
        $errors = []
    ) : JsonResponse
    {
        return response()->json([
            'success' => $success,
            'data' => $data,
            'message' => $message,
            'errors' => $errors
        ], $statusCode);
    }
}

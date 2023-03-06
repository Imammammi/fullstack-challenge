<?php

namespace App\Traits;
use Illuminate\Http\Response;

trait HttpResponses
{
    protected function success($data, $message = null, $statusCode = 200)
    {
        return response()->json([
            'status' => 'Resquest succesful.',
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    protected function error($data, $message = null, $statusCode = 404)
    {
        return response()->json([
            'status' => 'An error occurred.',
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}

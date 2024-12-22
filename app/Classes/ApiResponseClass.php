<?php

namespace App\Classes;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ApiResponseClass
{
    public static function rollback($e, $message = 'Something went wrong! Process not completed')
    {
        DB::rollBack();
        self::throw($e, $message,500);
    }

    public static function throw($e, $message, $statusCode)
    {
        // dd($message);
        Log::info($e);
        if(is_array($message) && isset($message['statusCode'])) {
            $statusCode = $message['statusCode'][0];
            $message = $message['error'];
        }

        throw new HttpResponseException(response([
            'statusCode' => $statusCode,
            'message' => $message,
        ], $statusCode));
    }

    public static function sendResponse($result, $message, $code = 200)
    {
        $response = [
            'statusCode' => $code,
            'success' => true,
            'message' => '',
            'data' => $result,
        ];
        if (!empty($message)) {
            $response['message'] = $message;
        }

        return response($response, $code)->header('Content-Type', 'application/json');
    }
}

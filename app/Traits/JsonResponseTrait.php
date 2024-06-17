<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait JsonResponseTrait
{
    /**
     * @param $result
     * @param $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendResponse($result, $message = null, int $status = Response::HTTP_OK)
    {
        return response()->json(self::makeResponse($message, $result), $status, []);
    }

    /**
     * @param $result
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendData($result, int $status = Response::HTTP_OK): JsonResponse
    {
        return response()->json($result, $status, []);
    }

    /**
     * @param string $message
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMessage(string $message, int $status = Response::HTTP_OK)
    {
        return response()->json(compact('message'), $status, [], JSON_NUMERIC_CHECK);
    }

    /**
     * @param string $message
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendErrorResponse(string $message, int $status = Response::HTTP_UNPROCESSABLE_ENTITY)
    {
        return response()->json(['error_message' => $message], $status, [], JSON_NUMERIC_CHECK);
    }

    public static function makeResponse($message, $data)
    {
        return [
            'success' => true,
            'data' => $data,
            'message' => $message,
        ];
    }
}

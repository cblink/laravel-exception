<?php


namespace Cblink\LaravelException;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

/**
 * Trait ExceptionResponseTrait
 * @package App\Traits
 */
trait ExceptionResponseTrait
{
    /**
     * @param int $errCode
     * @param string $errMsg
     * @param int $statCode
     * @return JsonResponse
     */
    public function error(int $errCode, string $errMsg = null, int $statCode = Response::HTTP_OK): JsonResponse
    {
        return new JsonResponse([
            config('exceptions.response.err_code_name', 'err_code') => $errCode,
            config('exceptions.response.err_msg_name', 'err_msg') => $errMsg
        ], $statCode, [
            'Access-Control-Allow-Origin' => '*'
        ]);
    }
}

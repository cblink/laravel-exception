<?php


namespace Cblink\LaravelException;

/**
 * Class ErrCode
 * @package App\Exceptions
 */
class ErrCode
{
    /** 基础错误码 **/
    const BAD_REQUEST = 400;
    const AUTHENTICATION = 401;
    const FORBIDDEN = 403;
    const PAGE_NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const VALIDATE_ERRORS = 422;
    const TOO_MANY_ATTEMPTS = 429;

    const SERVER_ERROR = 500;

    /** 业务错误码 **/
}

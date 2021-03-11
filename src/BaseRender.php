<?php

namespace Cblink\LaravelException;

use Throwable;
use Illuminate\Support\Arr;
use Illuminate\Http\Response;

/**
 * Class AbstractExceptionRender
 * @package App\Contracts\Abstracts
 */
abstract class BaseRender
{
    /**
     * @var Throwable
     */
    protected $throwable;

    public function __construct(Throwable $throwable)
    {
        $this->throwable = $throwable;
    }

    /**
     * @return int
     */
    abstract public function getErrCode(): int;

    /**
     * @return string
     */
    public function getErrMsg(): string
    {
        return "";
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return Response::HTTP_OK;
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    final protected function getSystemErrMsg()
    {
        return Arr::get(app('error-message'), $this->getErrCode(), '');
    }
}

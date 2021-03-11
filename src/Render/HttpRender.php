<?php

namespace Cblink\LaravelException\Render;

use Cblink\LaravelException\BaseRender;
use Symfony\Component\HttpKernel\Exception\HttpException;

class HttpRender extends BaseRender
{
    /**
     * @var HttpException
     */
    public $throwable;

    public function getErrCode(): int
    {
        return $this->throwable->getStatusCode();
    }

    public function getErrMsg(): string
    {
        return $this->getSystemErrMsg();
    }
}

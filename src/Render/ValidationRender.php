<?php

namespace Cblink\LaravelException\Render;

use Illuminate\Http\Response;
use Cblink\LaravelException\BaseRender;
use Illuminate\Validation\ValidationException;

/**
 * Class ValidationRender
 * @property ValidationException $throwable
 * @package App\Exceptions\Render
 */
class ValidationRender extends BaseRender
{
    public function getErrCode(): int
    {
        return Response::HTTP_UNPROCESSABLE_ENTITY;
    }

    public function getErrMsg(): string
    {
        return collect($this->throwable->errors())->first()[0];
    }
}

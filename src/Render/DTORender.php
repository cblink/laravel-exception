<?php

namespace Cblink\LaravelException\Render;

use Illuminate\Http\Response;
use Cblink\LaravelException\BaseRender;

/**
 * Class DTORender
 * @package App\Exceptions\Render
 */
class DTORender extends BaseRender
{
    public function getErrCode(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }

    public function getErrMsg(): string
    {
        return $this->throwable->getMessage();
    }
}

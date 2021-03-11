<?php

namespace Cblink\LaravelException\Render;

use Cblink\LaravelException\ErrCode;
use Cblink\LaravelException\BaseRender;

/**
 * Class ThrottleRender
 * @package App\Exceptions\Render
 */
class ThrottleRender extends BaseRender
{
    public function getErrCode(): int
    {
        return ErrCode::TOO_MANY_ATTEMPTS;
    }
}

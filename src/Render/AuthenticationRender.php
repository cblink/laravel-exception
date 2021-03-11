<?php

namespace Cblink\LaravelException\Render;

use Cblink\LaravelException\ErrCode;
use Cblink\LaravelException\BaseRender;

/**
 * Class AuthenticationRender
 * @package App\Exceptions\Render
 */
class AuthenticationRender extends BaseRender
{
    public function getErrCode(): int
    {
        return ErrCode::AUTHENTICATION;
    }

    public function getErrMsg(): string
    {
        return $this->getSystemErrMsg();
    }
}

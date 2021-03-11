<?php

namespace Cblink\LaravelException\Render;

use Illuminate\Support\Arr;
use Illuminate\Http\Response;
use Cblink\LaravelException\BaseRender;

class DefaultRender extends BaseRender
{
    public function getErrCode(): int
    {
        if (is_int($this->throwable->getCode()) && $this->throwable->getCode() !== 0) {
            return $this->throwable->getCode();
        }

        return Response::HTTP_BAD_REQUEST;
    }

    /**
     * @return string
     */
    public function getErrMsg(): string
    {
        /**
         * 如果开启了调试模式，并且没有找到对应格式化的错误信息
         * 则直接使用异常类的message进行输出
         */
        if (config('app.debug') && !empty($this->throwable->getMessage())) {
            return $this->throwable->getMessage();
        }

        $message = $this->getSystemErrMsg();

        return (is_null($message) || $message === '') ? 'unknown error!' : $message;
    }
}

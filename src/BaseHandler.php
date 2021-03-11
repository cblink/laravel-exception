<?php

namespace Cblink\LaravelException;

use Throwable;
use Cblink\LaravelException\Render\DefaultRender;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

/**
 * Class AbstractExceptionHandler
 * @package App\Contracts\Abstracts
 */
class BaseHandler extends ExceptionHandler
{
    use ExceptionResponseTrait;

    /**
     * @return array|mixed
     */
    public function getExceptions()
    {
        return config('exceptions.renders', []);
    }

    /**
     * @param $request
     * @param \Throwable $exception
     * @return mixed
     */
    public function renderApi($request, \Throwable $exception)
    {
        $render = $this->getRender($exception);

        return $this->error(
            $render->getErrCode(),
            $render->getErrMsg(),
            $render->getStatusCode()
        );
    }

    /**
     * @param Throwable $exception
     * @return BaseRender
     */
    public function getRender(Throwable $exception)
    {
        foreach ($this->getExceptions() as $exceptionClass => $render) {
            if ($exception instanceof $exceptionClass) {
                return new $render($exception);
            }
        }

        return new DefaultRender($exception);
    }
}

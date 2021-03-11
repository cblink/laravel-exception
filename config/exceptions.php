<?php

use Cblink\LaravelException\ErrCode;
use Cblink\LaravelException\Render\DTORender;
use Cblink\LaravelException\Render\HttpRender;
use Cblink\LaravelException\Render\ThrottleRender;
use Cblink\LaravelException\Render\ValidationRender;
use Cblink\LaravelException\Render\AuthenticationRender;


return [

    // 语言包，对应messages中的语言
    'language' => 'zh-cn',

    // 返回参数配置
    'response' => [
        'err_code_name' => env('EXCEPTION_ERR_CODE_NAME', 'err_code'),
        'err_msg_name' => env('EXCEPTION_ERR_MSG_NAME', 'err_msg'),
    ],

    // 处理异常返回的render类
    'renders' => [
        \Illuminate\Auth\AuthenticationException::class => AuthenticationRender::class,
        \Illuminate\Validation\ValidationException::class => ValidationRender::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class => HttpRender::class,
        \Cblink\DTO\Exceptions\DTOException::class => DTORender::class,
        \Illuminate\Http\Exceptions\ThrottleRequestsException::class => ThrottleRender::class
    ],

    // 错误消息说明
    'messages' => [
        'zh-cn' => [
            ErrCode::BAD_REQUEST => '请求参数错误',
            ErrCode::AUTHENTICATION => '无权访问，请先进行授权登陆',
            ErrCode::FORBIDDEN => '无权访问，请求受限',
            ErrCode::PAGE_NOT_FOUND => '请求地址错误!',
            ErrCode::METHOD_NOT_ALLOWED => '请求方式错误!',
            ErrCode::SERVER_ERROR => '服务器开小差了，请稍后再试',
            ErrCode::TOO_MANY_ATTEMPTS => '请求过于频繁，请稍后再试',
        ]
    ]
];
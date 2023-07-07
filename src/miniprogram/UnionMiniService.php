<?php

namespace Sangdou\Unionpay\miniprogram;

class UnionMiniService
{
    const API_ACCESS_TOKEN = '/v1/token/access';

    public function __construct(...$arguments)
    {
        $vars = get_defined_vars();
    }

    public static function boot()
    {
        echo '当前时间' . time();
    }
}
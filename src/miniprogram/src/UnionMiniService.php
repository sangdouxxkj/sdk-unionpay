<?php

namespace Sangdou\Unionpay\miniprogram\src;

class UnionMiniService
{


    public function __construct(...$arguments)
    {
        $vars = get_defined_vars();
    }

    public function boot()
    {
        echo '当前时间' . time();
    }
}
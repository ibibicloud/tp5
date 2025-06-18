<?php

namespace app\web\controller;

use app\web\controller\BaseError as BaseController;

class Index extends BaseController
{
    // 首页
    public function index()
    {
        return 'web/Index/index';
    }

}
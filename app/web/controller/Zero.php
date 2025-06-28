<?php

namespace app\web\controller;

use think\Controller;

class Zero extends Controller
{
    // 控制器初始化 获取网站配置参数
    public function initialize()
    {}

    // 空控制器
	public function index()
    {
        abort(404, '页面不存在');
    }

    // 空操作
	public function _empty()
    {
        abort(404, '页面不存在');
    }

}
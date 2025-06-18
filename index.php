<?php

// 网站入口文件
namespace think;

// composer自动加载
require __DIR__ . '/vendor/autoload.php';

// 定义应用目录
define('APP_PATH', __DIR__ . '/app/');

// 定义资源目录
define('ASSETS_PATH', __DIR__ . '/assets/');

// 执行应用并响应
Container::get('app')->path(APP_PATH)->run()->send();

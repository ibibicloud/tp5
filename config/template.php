<?php

// 模板配置
return [
    // 模板引擎类型 支持 php think 支持扩展
    'type'                  => 'Think',
    // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写 3 保持操作方法
    'auto_rule'             => 1,
    // 模板路径
    'view_path'             => '',
    // 模板后缀
    'view_suffix'           => 'html',
    // 模板文件名分隔符
    'view_depr'             => DIRECTORY_SEPARATOR,
    // 模板引擎普通标签开始标记
    'tpl_begin'             => '{',
    // 模板引擎普通标签结束标记
    'tpl_end'               => '}',
    // 标签库标签开始标记
    'taglib_begin'          => '{',
    // 标签库标签结束标记
    'taglib_end'            => '}',
    // 模板缓存有效期 0 为永久，(以数字为值，单位:秒)
    'cache_time'            => 0,
    // 需要额外加载的标签库(须指定标签库名称)，多个以逗号分隔
    'taglib_pre_load'       => '',
    // 模板替换字符串
    'tpl_replace_string' => [
        '__ASSETS__'        => '/assets',
        '__IMG__'           => '/assets/image',
        '__CSS__'           => '/assets/css',
        '__JS__'            => '/assets/js',
    ],
    // 默认过滤方法 用于普通标签输出
    'default_filter'        => 'htmlentities',
];
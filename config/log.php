<?php

// 日志配置
return [
    // 日志记录方式，内置 file socket 支持扩展
    'type'        => 'File',
    // 日志保存目录
    'path'        => '',
    // 日志文件大小限制（超出会生成多个文件，单位：b） 2MB
    'file_size'   => 2097152,
    //日志的时间格式，默认是` c `
    'time_format' => 'Y-m-d H:i:s',
    // 日志记录级别
    'level'       => [],
    // 单文件日志写入
    'single'      => false,
    // 独立日志级别
    'apart_level' => [],
    // 最大日志文件数量（如果设置了数字,则自动成为20201010.log格式）
    'max_files'   => 30,
    // 是否关闭日志写入
    'close'       => false,
];
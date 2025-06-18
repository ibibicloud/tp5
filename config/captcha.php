<?php

// 验证码配置
return [
    // 过期时间(单位：秒)
    'expire'	=>	1800,
    // 是否使用中文
    // 'useZh'		=>	true,
    // 验证码字体大小(px)
    'fontSize'	=>	20,
    // 是否画混淆曲线
    'useCurve'	=>	true,
    // 是否添加杂点
    'useNoise'	=>	true,
    // 验证码图片宽度(0=>自动计算)
    'imageW'	=>	150,
    // 验证码图片高度(0=>自动计算)
    'imageH'	=>	38,
    // 验证码位数
    'length'	=>	4,
    // 背景颜色
    'bg'		=>	[220, 220, 220],
    // 验证码字体(不设置是随机获取)
    // 'fontttf'	=>	'nanzhengbeizhan.ttf',
    // 验证成功后是否重置
    'reset'		=>	true,
];
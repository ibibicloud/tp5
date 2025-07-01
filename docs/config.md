
## 配置 config
惯例配置文件存放于 核心框架内置的配置文件，无需更改

应用配置文件存放于 项目目录/config 下

模块配置文件存放于 项目目录/module_name/config 下

### 优先级
惯例配置 -> 应用配置 -> 模块配置 -> 动态配置

### 配置读取
~~~
use think\facade\Config;
Config::get('cookie');
Config::get('cookie.expire');
~~~

### 配置读取 助手函数
~~~
config('cookie');
config('cookie.expire');
~~~

### 配置定义 【最多支持二级】
~~~
use think\facade\Config;
Config::set('cookie.expire', 259200);
~~~

### 配置定义 助手函数
~~~
config('cookie.expire', 259200);
~~~

### 支持传入数组批量设置 第二个参数传入一级配置名
~~~
Config::set([
    'app_trace' => true,
    'show_error_msg' => true
], 'app');
~~~
~~~
config([
    'app_trace' => true,
    'show_error_msg' => true
],'app');
~~~
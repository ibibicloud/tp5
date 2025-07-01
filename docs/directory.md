
## 目录结构 directory

### 支持更改入口文件 index.php
~~~
// 网站入口文件
namespace think;

// composer自动加载
require __DIR__ . '/vendor/autoload.php';

// 定义应用目录
define('APP_PATH', __DIR__ . '/app/');

// 执行应用并响应
Container::get('app')->path(APP_PATH)->run()->send();

~~~

### 目录结构
~~~
wwwroot  项目目录（或者子目录）
├─app					应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─module_name        模块目录
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  ├─config          配置目录
│  │  ├─taglib          标签扩展目录
│  │  ├─functions.php	模块函数文件
│  │  └─ ...            更多类库目录
│  │
│  └─functions.php		公共函数文件
│
├─config                应用配置目录
│  ├─app.php            应用配置
│  ├─app.route			路由定义文件
│  ├─cache.php          缓存配置
│  ├─captcha.php		验证码配置
│  ├─cookie.php         Cookie配置
│  ├─database.php       数据库配置
│  ├─log.php            日志配置
│  ├─middleware.php		中间件配置
│  ├─paginate.php		分页配置
│  ├─session.php        Session配置
│  ├─template.php       模板引擎配置
│  └─trace.php          Trace配置
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─composer.json         composer 定义文件
└─README.md             README 文件
~~~

## 路由 route
路由定义文件位于 项目目录/config/app.route

### 路由定义
~~~
use think\facade\Route;
// 注册路由到 模块/控制器/操作 web/Article/read
Route::rule('article/:id', 'web/Article/read');
~~~

访问地址
~~~
http://serverName/article/5
http://serverName/article/5.html
~~~

### 指定请求类型
~~~
use think\facade\Route;
// 指定请求类型 POST
Route::rule('article/:id', 'web/Article/action', 'POST');
// 指定请求类型 GET|POST
Route::rule('article/:id', 'web/Article/action', 'GET|POST');
// 指定请求类型 GET
Route::get('article/:id', 'web/Article/action');
// 指定请求类型 POST
Route::post('article/:id', 'web/Article/action');
// 任意请求类型
Route::any('article/:id', 'web/Article/action');
~~~

### 路由变量规则
~~~
use think\facade\Route;
// 全局变量规则
// 系统默认的变量规则设置是\w+,只会匹配字母、数字和下划线字符,并不会匹配特殊符号和中文
Route::pattern([
    'id'		=>	'\d+',
    'page'		=>	'\d+',
    'seo'		=>	'[a-zA-Z0-9-]+',
    'alphaNum'	=>	'\w+',
    'q'			=>	'[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*',
]);
~~~
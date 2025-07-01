
## 视图  view

### 赋值 assign
~~~
$this->view->assign('data', 'demo');
~~~

### 渲染 fetch
~~~
return $this->view->fetch('template');
~~~
~~~
return $this->view->fetch('view/template');
~~~
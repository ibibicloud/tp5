
## 数据库 db

### 查询 where
~~~
db('table')->where('id', 1)->find();
~~~
~~~
db('table')->where('id', [1, 2, 3])->select();
~~~
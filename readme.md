OC-Api 
===============

## 说明
thinkphp5编写的restful风格的API，集API请求处理，权限认证，自动生成文档等功能；

 - restful风格处理请求
 > 每个接口对于一个控制器，method对应[method]方法响应

 - 权限认证
 > Basic,Oauth Client Credentials Grant
 
 - 文档生成
 > 简洁，优雅，不需要额外的文档工具;
 
 
## 安装
- 如果想在你的TP5项目中使用,那么可以直接使用
```
composer require onecreate/oc-api
```
- 如果是新项目先要创建tp5项目,然后再require

```
composer create-project topthink/think api  --prefer-dist
composer require onecreate/oc-api
```

- 在扩展配置目录（extra）中增加api_doc.php
```
return [
    '1' => ['name' => 'v1版本接口', 'id' => '1', 'parent' => '0', 'class' => '', 'readme' => ''],
    '2' => ['name' => 'v2版本接口', 'id' => '2', 'parent' => '0', 'class' => '', 'readme' => ''],
    '10' => ['name' => '公用接口', 'id' => '10', 'parent' => '1', 'class' => '', 'readme' => '/doc/common/common.md'],
    //用户接口
    '20' => ['name' => '用户接口', 'id' => '20', 'parent' => '1', 'readme' => '', 'class' => ''],
    //用户接口-基础接口
    '21' => ['name' => '用户接口-基础接口', 'id' => '21', 'parent' => '20', 'readme' => '/doc/user/base.md', 'class' => ''],
    //用户接口-个人中心
    '22' => ['name' => '用户接口-个人中心', 'id' => '22', 'parent' => '20', 'readme' => '/doc/user/account.md', 'class' => ''],
    //众筹项目接口
    '30' => ['name' => '众筹项目接口', 'id' => '30', 'parent' => '2', 'readme' => '/doc/project/project.md', 'class' => ''],
];
```

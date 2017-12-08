<?php
// +----------------------------------------------------------------------
// | Do something, and change something!
// +----------------------------------------------------------------------
// | User: guozqiu  |  Email:24147287@qq.com  | Time:2017/9/26 16:18
// +----------------------------------------------------------------------
// | TITLE: just do it!
// +----------------------------------------------------------------------
namespace OcApi\route;

use think\App;
use think\Route;
use think\Request;
use  OcApi\controller\Wiki;

class OcRoute
{

    public static function wiki()
    {
        $pathInfo = Request::instance()->pathinfo();

        if (false === stripos($pathInfo, 'wiki')) {
            // 请求方式非法 则用默认请求方法
            return;
        }
        Route::any('wiki/apiInfo', function () {
            $controller = new Wiki();
            return App::invokeMethod([$controller, 'apiInfo']);
        });
        Route::any('wiki', function () {
            $controller = new Wiki();
            return App::invokeMethod([$controller, 'index']);
        });

    }
}
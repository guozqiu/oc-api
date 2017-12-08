<?php
// +----------------------------------------------------------------------
// | Do something, and change something!
// +----------------------------------------------------------------------
// |  User: guozqiu  |  Email:24147287@qq.com  | Time:2017/3/9 15:10
// +----------------------------------------------------------------------
// | TITLE: just do it!
// +----------------------------------------------------------------------


namespace OcApi\auth;


use OcApi\exception\UnauthorizedException;
use think\Exception;
use think\Request;

class BaseAuth
{
    /**
     * 执行授权验证
     * @param $auth
     * @return bool
     * @throws AuthException
     * @throws Exception
     */
    public static function auth($auth)
    {
        $request = Request::instance();
        return $auth->authenticate($request);
    }


}
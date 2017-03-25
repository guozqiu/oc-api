<?php
// +----------------------------------------------------------------------
// | When work is a pleasure, life is a joy!
// +----------------------------------------------------------------------
// |  User: ShouKun Liu  |  Email:24147287@qq.com  | Time:2017/3/9 15:10
// +----------------------------------------------------------------------
// | TITLE: this to do?
// +----------------------------------------------------------------------


namespace DawnApi\auth;


use DawnApi\exception\UnauthorizedException;
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

        try {
            if ($auth->authenticate($request) == true) {
                return true;
            } else {
                throw new UnauthorizedException();
            }
        } catch (UnauthorizedException $e) {
            throw new UnauthorizedException($e->authenticate, $e->getMessage());
        } catch (\Exception $e) {
            throw  new Exception('server error', 500);
        }

    }


}
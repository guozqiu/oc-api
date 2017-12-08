<?php
// +----------------------------------------------------------------------
// | Do something, and change something!
// +----------------------------------------------------------------------
// |User: guozqiu  |  Email:24147287@qq.com  | Time:2017/3/10 11:38
// +----------------------------------------------------------------------
// | TITLE: just do it!
// +----------------------------------------------------------------------


namespace OcApi\facade;


class Factory
{

    private static $Factory;

    private function __construct()
    {
    }

    public static function getInstance($className, $options = null)
    {
        if (!isset(self::$Factory[$className]) || !self::$Factory[$className]) {
            self::$Factory[$className] = new $className($options);
        }
        return self::$Factory[$className];
    }
}
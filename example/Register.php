<?php

namespace example;
/**
 * Created by PhpStorm.
 * User: AndyYoungDev
 * Date: 3/22/2019
 * Time: 2:21 PM
 */
//注册树模式
class Register
{
    protected static $tree;

    public static function set($alias, $object)
    {
        self::$tree[$alias] = $object;
    }

    public static function get($alias)
    {
        return self::$tree[$alias];
    }

    public static function remove($alias)
    {
        unset(self::$tree[$alias]);
    }
}

class test
{
    public function test()
    {
        return "test";
    }
}
Register::set('test',new test());
$obj=Register::get('test');
var_dump($obj->test());


//高级用法

/*
 * 通过工厂模式创建单例对象
 * 将对方挂到注册树上
 *
 */


<?php
/**
 * User: AndyYoungDev
 * Date: 2019/3/9
 * Time: 10:58
 */

//简单工厂模式（静态工厂模式）
//
interface animal
{
    public function say();
}

class cat implements animal
{

    public function say()
    {
        echo "喵";
        // TODO: Implement say() method.
    }
}

class dog implements animal
{
    public function say()
    {
        echo "汪";
        // TODO: Implement say() method.
    }
}

class factory
{
    static function createCat()
    {
        return new cat();
    }

    static function createDog()
    {
        return new dog();
    }
}

$cat = factory::createCat();
$cat->say();
$dog = factory::createDog();
$dog->say();

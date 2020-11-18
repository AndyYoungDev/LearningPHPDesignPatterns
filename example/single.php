<?php
/**
 * User: AndyYoungDev
 * Date: 2019/3/9
 * Time: 10:58
 */

//单例模式

class Single
{
    private $name;//声明一个私有的实例变量

    private function __construct()
    {//声明私有构造方法为了防止外部代码使用new来创建对象。
    }

    static public $instance;//声明一个静态变量（保存在类中唯一的一个实例）

    static public function getInstance()
    {//声明一个getInstance()静态方法，用于检测是否有实例对象
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$a=Single::getInstance();
$b=Single::getInstance();
$a->setName('a');
$b->setName('b');
echo $a->getName();
echo $b->getName();
<?php
/**
 * User: Jack Yang
 * Date: 2019/3/9
 * Time: 10:58
 */

//观察者模式
class subject implements SplSubject{
    private $observers;
    public function __construct()
    {
        $this->observers=new SplObjectStorage();
    }
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
        // TODO: Implement attach() method.
    }
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);

        // TODO: Implement detach() method.
    }
    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
        // TODO: Implement notify() method.
    }
}

class A implements SplObserver{
    public function update(SplSubject $subject)
    {
        echo "A";
        // TODO: Implement update() method.
    }
}
class B implements SplObserver{
    public function update(SplSubject $subject)
    {
        echo "B";
        // TODO: Implement update() method.
    }
}

$a=new A();
$b=new B();
$subject=new Subject();
$subject->attach($a);
$subject->attach($b);
$subject->notify();

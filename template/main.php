<?php
abstract class AbstractClass{
    public function template(){
        $this->methodOne();
        $this->methodTwo();
    }

    abstract public function methodOne();
    abstract public function methodTwo();
}

class ConcreteClass extends AbstractClass{

    public function methodOne()
    {
        // TODO: Implement methodOne() method.
        echo 'methodOne';
    }

    public function methodTwo()
    {
        // TODO: Implement methodTwo() method.
        echo 'methodTwo';
    }
}

$class = new ConcreteClass();
$class->template();
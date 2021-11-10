<?php
//典型的控制反转
interface Strategy{
    public function doAction();
}

class ConcreteClass implements Strategy{

    public function doAction()
    {
        // TODO: Implement doAction() method.
        echo 'ConcreteClass';
    }
}

class StrategyFactory{
    public $concrete;
    public function __construct(ConcreteClass $concrete){
        $this->concrete = $concrete;
    }

    public function make(){
        $this->concrete->doAction();
    }
}

$factory = new StrategyFactory(new ConcreteClass());
$factory->make();
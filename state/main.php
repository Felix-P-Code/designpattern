<?php
//状态模式-根据不同状态返回不同的处理类
interface State{
    public function handle($factory);
}

class StateA implements State{

    public function show(){
        echo '是开灯状态';
    }

    public function handle($factory)
    {
        // TODO: Implement handle() method.
        $factory->setstate(new StateB());
    }
}

class StateB implements State{
    public function show(){
        echo '是关灯状态';
    }

    public function handle($factory)
    {
        // TODO: Implement handle() method.
        $factory->setstate(new StateA());
    }
}

class StateFactory{
    public $state;
    public function setstate(State $state){
        $this->state = $state;
    }

    public function make(){

        $this->state->show();
        $this->state->handle($this);
        $this->state->show();
    }
}

$state = new StateFactory();
$state->setstate(new StateB());
$state->make();
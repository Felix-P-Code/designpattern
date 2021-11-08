<?php
interface Component{
    public function  operation();
}

class ConcreteComponent implements Component{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function  operation(){
        echo $this->name;
    }
}

class Decorator {
    // 抽象构件角色对象实例对象
    protected $component;

    // 初始化抽象构件角色对象
    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function operation()
    {
        if(!empty($this->component)){
            $this->component->operation();
        }
    }
}

class DecoratorA extends Decorator{
    public function make()
    {
        echo '鸡蛋 +';
        $this->operation();
    }

}

$component = new ConcreteComponent('汤');
$da = new DecoratorA($component);
$da->make();
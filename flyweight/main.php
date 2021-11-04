<?php
/*
 * 用途总结：享元模式可以将需要共享的资源集中起来，统一管理，防止重复消耗。
 *  实现总结：需要一个享元工厂管理共享的资源，比如上面的FlyweightFactory。把所有共享的资源的生产全部交给个享元工厂。
 * */

interface  ProductFly{
    public function make();
}

class Phone implements ProductFly{
    public function make(){
        echo '这是手机';
    }
}

class Computer implements ProductFly{
    public function make(){
        echo '这是电脑';
    }
}

class FactoryFly{
    private $factory;
    public function getProduct($name){
        if(!isset($this->factory[$name])){
            $this->factory[$name] = new $name;
        }
        return $this->factory[$name];
    }
}

$factory = new FactoryFly();
$phone = $factory->getProduct('Phone');
$phone->make();
$computer = $factory->getProduct('Computer');
$computer->make();


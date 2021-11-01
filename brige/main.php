<?php
/* 主要解决不同工厂和product 的耦合问题
 * 个人感觉有点像抽象工厂
 *
 * */
interface ProductInterface{
    public function make();
}

abstract class FactoryAbstract{
    protected $product;
    public function __construct(ProductInterface $product){
        $this->product = $product;
    }

    public abstract function run();
}

class Phone implements ProductInterface{


    public function make()
    {
       echo '这是手机';
    }
}

class Factroy extends FactoryAbstract {

    public function run(){
        $this->product->make();
    }
}

$factroy = new Factroy(new Phone());

$factroy->run();



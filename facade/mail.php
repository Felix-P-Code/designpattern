<?php

class ProductOne{
    public function one(){
        echo 'one';
    }
}

class ProductTwo{
    public function two(){
        echo 'two';
    }
}
class ProductThree{
    public function three(){
        echo 'three';
    }
}

class factoryFacade{
    public $p1,$p2,$p3;
    public function __construct(){
        $this->p1 = new ProductOne();
        $this->p2 = new ProductTwo();
        $this->p3 = new ProductThree();
    }

    public function make(){
        $this->p1->one();
        $this->p2->two();
    }

    public function maketwo(){
        $this->p3->three();
        $this->p2->two();
    }
}

$factory = new factoryFacade();
$factory->maketwo();
$factory->make();
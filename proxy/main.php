<?php
interface Cookie{
    public function zheng();
    public function zha();
    public function jian();
}

class Shiwu implements Cookie{

    public $shiwu;

    public function __construct($shiwu){
        $this->shiwu = $shiwu;
    }
    public function zheng()
    {
        // TODO: Implement zheng() method.
        echo $this->shiwu.'蒸';
    }

    public function zha()
    {
        // TODO: Implement zha() method.
        echo $this->shiwu.'炸';
    }

    public function jian()
    {
        // TODO: Implement jian() method.
        echo $this->shiwu.'煎';
    }
}

class Proxy implements Cookie{
    public $fish;
    public function __construct($shiwu='鱼'){
        $this->fish = new Shiwu($shiwu);
    }

    public function zheng()
    {
        // TODO: Implement zheng() method.
        $this->fish->zheng();
    }

    public function zha()
    {
        // TODO: Implement zha() method.
        $this->fish->zha();
    }

    public function jian()
    {
        // TODO: Implement jian() method.
        $this->fish->jian();
    }
}

$proxy = new Proxy('鸡');
$proxy->zheng();
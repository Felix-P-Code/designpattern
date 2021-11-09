<?php
//组合模式
abstract class Component
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    //通常用add和remove方法来提供增加或移除树枝货树叶的功能
    abstract public function add(Component $c);
    abstract public function remove(Component $c);
    abstract public function display($depth);
}

class Leaf extends Component{
    public function add(Component $c){
        echo 'nothing to do';
    }

    public function remove(Component $c){
        echo 'nothing to do';
    }

    public function display($depth){
        echo str_repeat('-', $depth).$this->name."\n";
    }


}

class Composite extends Component{
    private $childern = [];

    public function add(Component $c)
    {
        array_push($this->childern, $c);
    }

    public function remove(Component $c)
    {
        foreach ($this->childern as $key => $value) {
            if ($c === $value) {
                unset($this->childern[$key]);
            }
        }
    }

    // 显示其枝节点名称，并对其下级进行遍历
    public function display($depth)
    {
        echo str_repeat('-', $depth).$this->name."\n";

        foreach ($this->childern as $component) {
            //var_dump($component->display($depth +2));
            $component->display($depth + 2);
        }
    }
}

$root = new Composite('root');
$root->add(new Leaf("Leaf A"));
$root->add(new Leaf("Leaf B"));

$comp = new Composite("Composite X");
$comp->add(new Leaf("Leaf XA"));
$comp->add(new Leaf("Leaf XB"));

$root->add($comp);

$comp2 = new Composite("Composite X");
$comp2->add(new Leaf("Leaf XA"));
$comp2->add(new Leaf("Leaf XB"));

$root->add($comp2);

$root->add(new  Leaf("Leaf C"));

/*$leaf = new Leaf("Leaf D");
$root->add($leaf);
$root->remove($leaf);*/

$root->display(1);



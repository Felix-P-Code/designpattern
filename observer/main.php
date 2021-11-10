<?php
//观察者模式
interface Observer{
    public function update();
}

class ObServerOne implements Observer{

    public function update()
    {
        // TODO: Implement update() method.
        echo 'one';
    }
}

class ObServerTwo implements Observer{

    public function update()
    {
        // TODO: Implement update() method.
        echo 'two';
    }
}

abstract class EventAbstract
{
    private $ObServers = [];

    //增加观察者
    public function add(ObServer $ObServer)
    {
        $this->ObServers[] = $ObServer;
    }

    //事件通知
    public function notify()
    {
        foreach ($this->ObServers as $ObServer) {
            $ObServer->update();
        }
    }

}

class Event extends EventAbstract{
    public function trigger()
    {
        //通知观察者
        $this->notify();
    }
}

$event = new Event();
$event->add(new ObServerOne());
$event->add(new ObServerTwo());
$event->trigger();
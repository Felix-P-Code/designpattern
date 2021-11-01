<?php

namespace factory;


class Restaurant implements Factory
{

    public function produce($class)
    {
        // 这里可以做成反射机制
        $class = 'factory\\' . $class;
        return new $class;
    }
}

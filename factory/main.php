<?php

spl_autoload_register('autoload');

function autoload($class)
{
    $file = dirname($_SERVER['SCRIPT_FILENAME']) . '/../' . str_replace('\\', '/', $class) . '.php';

    if (!file_exists($file)) {

        $file = dirname($_SERVER['SCRIPT_FILENAME']) . '/' . str_replace('\\', '/', $class) . '.php';

    }

    require $file;
}

use factory\Restaurant;

$restaurant = new Restaurant();
$meat = $restaurant->produce('Meat');


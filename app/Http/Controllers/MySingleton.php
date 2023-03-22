<?php
namespace App\Http\Controllers;

use App\Http\Controllers\MySingletoninterface;

abstract class MySingleton implements MySingletoninterface
{
    // private $instance;
    // public  function getInstance()
    // {
    //     if (!self::$instance) {
    //         self::$instance = new self();
    //     }

    //     return self::$instance;
    // }
    public function compareTime($first, $second)
    {
        return 10;
    }
}
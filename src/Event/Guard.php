<?php

namespace Event;

use Controller\BaseController;

class Guard
{
    public function beforeEvent()
    {

        return [
            BaseController::class
        ];
    }

    public function __construct()
    {
        //die('GUARD');
        //$reflector = new \ReflectionClass($this);
      //  $reflector->getMethod('handle')->
    }


}
<?php

namespace Event;

use Controller\BaseController;

class NotFound
{
    public function exceptionEvent()
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
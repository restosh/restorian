<?php

use VendoPHP\DI;

DI::set('routing', function () {

    return (new \VendoPHP\Service\Routing());
});
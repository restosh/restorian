<?php

use VendoPHP\DI;
use VendoPHP\CommandBus;

DI::set('commandBus', function () {
    return (new CommandBus());
});
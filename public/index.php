<?php

use VendoPHP\DI;

define('APP_DIR', dirname(__DIR__));

require_once APP_DIR . "/vendor/autoload.php";

try {
    $kernel = new VendoPHP\Kernel();

    echo $kernel->handle();

} catch (\Exception $exception) {
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
}
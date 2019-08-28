<?php

use VendoPHP\DI;
use VendoPHP\Exception\NotFound;

define('APP_DIR', dirname(__DIR__));

require_once APP_DIR . "/vendor/autoload.php";

try {
    $kernel = new VendoPHP\Kernel();

    echo $kernel->handle(DI::get('routing')->getClassName(), DI::get('routing')->getMethodName());

    //DI::get('dispatcher');
} catch (NotFound $exception) {
    DI::get('routing')->redirect('not_found');

} catch (\Throwable $exception) {
    if($exception instanceof \VendoPHP\Exception\NotFoundException){
        DI::get('routing')->redirect('not_found');
    }
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
} catch (\Exception $exception) {
    echo '<pre>';
    var_dump($exception);
    echo '</pre>';
}
<?php

use VendoPHP\DI;
use VendoPHP\Env;

DI::set('twig', function () {

    $templatesDir = Env::getPath('DIR_VIEW');
    $cacheDir = Env::getPath('DIR_CACHE');
    $isDevMode = Env::isDebug();

    $loader = new \Twig\Loader\FilesystemLoader($templatesDir);
    $twig = new \Twig\Environment($loader, [
        'cache' => $cacheDir . '/templates',
        'debug' => $isDevMode
    ]);

    return $twig;
});
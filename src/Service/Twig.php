<?php

use VendoPHP\DI;
use VendoPHP\Env;

DI::set('twig', function () {

    $loader = new \Twig\Loader\FilesystemLoader(Env::getPath('DIR_VIEW'));

    $twig = new \Twig\Environment($loader, [
        'cache' => Env::getPath('DIR_CACHE') . '/templates',
        'debug' => Env::isDebug()
    ]);

    $filter = new \Twig\TwigFilter('param', function ($string) {
        return VendoPHP\Config::get($string);
    });

    $twig->addFilter($filter);

    $filter = new \Twig\TwigFilter('url', function ($string) {
        return VendoPHP\Service\Routing::url($string);
    });

    $twig->addFilter($filter);


    return $twig;
});
<?php

use Restorian\Controller\Project\Query\CreateController;
use VendoPHP\DI;

DI::set('routing', function () {

    return [
        '/' => [
            'GET' => [Restorian\Controller\Index\Query\IndexController::class, 'indexAction'],
        ],
        '/projects' => [
            'GET' => [Restorian\Controller\Project\Command\CreateController::class, 'postAction'],
            'POST' => [Restorian\Controller\Project\Command\CreateController::class, 'postAction'],
        ]
    ];
});
<?php

use VendoPHP\DI;
use VendoPHP\Env;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

DI::set('entityManager', function () {

    $isDevMode = Env::isDebug();
    $entityDir = Env::getPath('DIR_ENTITY');

    $config = Setup::createAnnotationMetadataConfiguration([$entityDir], $isDevMode);

    $conn = array(
        'driver' => 'pdo_sqlite',
        'path' => __DIR__ . '/db.sqlite',
    );


    return EntityManager::create($conn, $config);
});
<?php

namespace Restorian\Controller\Index\Query;


use Doctrine\ORM\EntityManagerInterface;
use VendoPHP\CommandBus;
use Twig\Environment as Twig;

class IndexController
{

    private $entityManager;
    private $commandBus;
    private $twig;

    public function __construct(
        EntityManagerInterface $entityManager,
        CommandBus $commandBus,
        Twig $twig
    )
    {
        $this->entityManager = $entityManager;
        $this->commandBus = $commandBus;
        $this->twig = $twig;
    }

    public function indexAction()
    {
        return $this->twig->render('index/index.html');
    }


}
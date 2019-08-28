<?php

namespace Controller\User\App\Index\Query;

use Controller\User\UserController;
use Doctrine\ORM\EntityManagerInterface;
use VendoPHP\Service\CommandBus;
use Twig\Environment as Twig;

class IndexController extends UserController
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
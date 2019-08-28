<?php

namespace Controller\User\App\Project\Query;

use Controller\User\UserController;
use Doctrine\ORM\EntityManagerInterface;
use VendoPHP\Service\CommandBus;
use Twig\Environment as Twig;

class CreateController extends UserController
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

    public function viewAction()
    {
       // die("GDZIE GUARD?");
        return $this->twig->render('project/create.html', ['name' => 'Fabien']);
    }


}
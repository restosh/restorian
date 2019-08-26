<?php

namespace Restorian\Controller\Project\Query;


use Doctrine\ORM\EntityManagerInterface;
use VendoPHP\CommandBus;
use Twig\Environment as Twig;

class CreateController
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
        return $this->twig->render('project/create.html', ['name' => 'Fabien']);
    }


}
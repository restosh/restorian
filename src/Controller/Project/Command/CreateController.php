<?php

namespace Restorian\Controller\Project\Command;


use Doctrine\ORM\EntityManagerInterface;
use Restorian\Message\Project\Command\CreateProjectMessage;
use VendoPHP\CommandBus;
use Twig\Environment as Twig;

class CreateController
{

    private $entityManager;
    private $commandBus;

    public function __construct(
        EntityManagerInterface $entityManager,
        CommandBus $commandBus
    )
    {
        $this->entityManager = $entityManager;
        $this->commandBus = $commandBus;
    }

    public function postAction()
    {
        $createProjectMessage = new CreateProjectMessage();
        $this->commandBus->dispatch($createProjectMessage);
    }
}
<?php

namespace Controller\User\App\Project\Command;


use Controller\User\UserController;
use Doctrine\ORM\EntityManagerInterface;
use VendoPHP\Service\CommandBus;

class CreateController extends UserController
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


}
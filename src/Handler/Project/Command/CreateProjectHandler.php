<?php

namespace Handler\Project\Command;


use Factory\Project\CreateFactory;
use Message\Project\Command\CreateProjectMessage;

class CreateProjectHandler
{

    private $createFactory;

    public function __construct(CreateFactory $createFactory)
    {
        $this->createFactory = $createFactory;
    }


    public function invoke(CreateProjectMessage $createProjectMessage)
    {
        $this->createFactory->handle();
    }
}
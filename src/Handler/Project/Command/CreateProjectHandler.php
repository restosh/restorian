<?php

namespace Restorian\Handler\Project\Command;


use Restorian\Message\Project\Command\CreateProjectMessage;

class CreateProjectHandler{



    public function handle(CreateProjectMessage $createProjectMessage){

        var_dump($createProjectMessage); die('dziki');
        die($createProjectMessage->ok);
    }
}
<?php

namespace Controller\Guest\App\Index\Query;

use Controller\BaseController;
use VendoPHP\Service\Route;
use Twig\Environment as Twig;

class NotFoundController extends BaseController
{

    private $twig;

    public function __construct(
        Twig $twig
    )
    {
        $this->twig = $twig;
    }

    /**
     * @Route("not_found", name="index", methods={"GET"});
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function indexAction()
    {
        return $this->twig->render('index/not_found.html');
    }


}
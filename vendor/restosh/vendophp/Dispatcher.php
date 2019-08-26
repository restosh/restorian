<?php declare(strict_types=1);

namespace VendoPHP;

use VendoPHP\Controller\Project\Command\Create;
use VendoPHP\Exception\ControllerNotFound;
use VendoPHP\Exception\ServiceNotFound;

class Dispatcher
{

    /**
     * @return mixed|object
     * @throws \ReflectionException
     */
    public static function handle()
    {

        $url = (isset($_GET['_url']) ? $_GET['_url'] : '/');

        $routing = DI::get('routing');

        if (isset($routing[$url])) {
            $method = self::getMethod();

            if (isset($routing[$url][$method])) {
                $controllerName = $routing[$url][$method][0];
                $actionName = $routing[$url][$method][1];
            }

            return DI::resolve($controllerName, $actionName);
        }

        throw new ControllerNotFound(ControllerNotFound::MESSAGE);
    }

    /**
     * @return string
     */
    public static function getMethod(): string
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    /**
     * @return bool
     */
    public function isPost(): bool
    {
        return (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST');
    }


}
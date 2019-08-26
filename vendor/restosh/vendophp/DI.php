<?php

namespace VendoPHP;

use VendoPHP\Exception\ServiceNotFound;

/**
 * Class DI
 * @package VendoPHP
 */
class DI
{

    /**
     * @var array
     */
    private static $services = [];

    /**
     * @var array
     */
    private static $instances = [];

    /**
     * @param string $name
     * @param $function
     */
    public static function set(string $name, $function): void
    {
        if (!isset(self::$services[$name])) {
            self::$services[$name] = $function;
        }
    }


    public static function show()
    {
        //var_dump(self::$services);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
        return (isset(self::$instances[$name]) || self::$services[$name]);
    }

    /**
     * @param string $name
     * @return mixed
     * @throws \Exception
     */
    public function get(string $name)
    {
        if (isset(self::$instances[$name])) {
            return self::$instances[$name];
        }

        if (isset(self::$services[$name])) {
            return self::register($name, self::$services[$name]);
        }

        throw new ServiceNotFound(ServiceNotFound::Message);
    }

    /**
     * @param $name
     * @param $function
     * @return mixed
     */
    public static function register($name, $function)
    {

        self::$instances[$name] = $function();

        return self::$instances[$name];
    }
    
    /**
     * @param string $class
     * @param string|null $method
     * @return mixed|object
     * @throws \ReflectionException
     */
    public static function resolve(string $class, string $method = null)
    {

        $reflector = new \ReflectionClass($class);

        $constructor = $reflector->getConstructor();

        if (is_null($constructor)) {
            $instance = $reflector->newInstance();
        } else {
            $instance = $reflector->newInstanceArgs(self::autowire($reflector->getConstructor()->getParameters()));
        }

        if (null !== $method) {

            $reflectionMethod = new \ReflectionMethod($class, $method);

            return $reflectionMethod->invokeArgs($instance, self::autowire($reflectionMethod->getParameters()));
        }

        return $instance;
    }

    /**
     * @param array $parameters
     * @return array
     * @throws \Exception
     */
    private static function autowire(array $parameters): array
    {
        $dependencies = [];

        foreach ($parameters as $parameter) {
            if (self::has($parameter->getName())) {
                $dependencies[] = self::get($parameter->getName());
            } else {
                $class = $parameter->getClass();
                $dependencies[] = new $class();
            }
        }

        return $dependencies;
    }
}
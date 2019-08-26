<?php declare(strict_types=1);

namespace VendoPHP;

/**
 * Class CommandBus
 * @package VendoPHP
 */
class CommandBus
{

    const CACHE_HANDLERS_NAME = 'vendophp.handlers';

    /**
     * @var array
     */
    private $commandQueue = [];

    /**
     * @var array|false|string
     */
    private $dirHandler;

    /**
     * CommandBus constructor.
     */
    public function __construct()
    {
        $this->dirHandler = Env::getPath('DIR_HANDLER');
    }

    /**
     * @param $command
     */
    public function dispatch($command): void
    {
        $this->commandQueue[] = $command;

        while ($command = array_shift($this->commandQueue)) {
            $this->invokeHandler($command);
        }
    }

    /**
     * @param $messageName
     * @return string
     */
    private function getHandlerName($messageName): string
    {
        $class = get_class($messageName);
        $arr = explode('\\', $class);

        return str_replace('Message', 'Handler', end($arr));
    }

    /**
     * @param $messageName
     * @return string
     */
    private function getNamespace($messageName): string
    {
        $class = get_class($messageName);
        $arr = explode('\\', $class);

        return $arr[0];
    }

    /**
     * @param string $handlerName
     * @return \RegexIterator|null
     */
    private function getHandlerFiles(string $handlerName): ?\RegexIterator
    {

        $directory = new \RecursiveDirectoryIterator($this->dirHandler);
        $iterator = new \RecursiveIteratorIterator($directory);
        $regex = new \RegexIterator($iterator, '/^.+' . $handlerName . '\.php$/i', \RecursiveRegexIterator::GET_MATCH);

        if (!empty($regex)) {
            return $regex;
        }

        return null;
    }

    /**
     * @param $message
     * @return array
     */
    private function getHandlerMapped($message): array
    {

        $handlers = Cache::get(self::CACHE_HANDLERS_NAME);

        if (null === $handlers) {

            $handlerName = $this->getHandlerName($message);
            $namespace = $this->getNamespace($message);

            $files = $this->getHandlerFiles($handlerName);

            foreach ($files as $file) {
                $handlerClassName = substr($file[0], strrpos($file[0], $this->dirHandler));
                $handlers[] = $namespace . '\\' . str_replace([$this->dirHandler, '.php', '/'], ['Handler', '', '\\'], $handlerClassName);
            }

            Cache::set(self::CACHE_HANDLERS_NAME, $handlers);
        }

        return $handlers;
    }

    /**
     * @param $message
     * @throws \ReflectionException
     */
    private function invokeHandler($message)
    {
        $handlers = $this->getHandlerMapped($message);

        if (!empty($handlers)) {
            foreach ($handlers as $handlerClassName) {
                $object = DI::resolve($handlerClassName);
                $object->handle($message);
            }
        }
    }
}
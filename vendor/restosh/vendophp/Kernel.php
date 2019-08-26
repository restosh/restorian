<?php declare(strict_types=1);

namespace VendoPHP;

use Symfony\Component\Dotenv\Dotenv;

class Kernel
{

    const CACHE_SERVICE_FILES = 'vendophp.services';

    public function __construct()
    {
        $this->loadEnv();
        $this->loadService();
    }

    public function handle()
    {
        return Dispatcher::handle();
    }


    private function loadEnv(): void
    {
        $dotenv = new Dotenv();
        $dotenv->load(APP_DIR . '/.env');
    }

    private function loadService(): void
    {
        $files = Cache::get(self::CACHE_SERVICE_FILES);

        if (null === $files) {
            $directory = new \RecursiveDirectoryIterator(Env::getPath('DIR_SERVICE'));
            $iterator = new \RecursiveIteratorIterator($directory);
            $files = (iterator_to_array(new \RegexIterator($iterator, '/^.+\.php$/i', \RecursiveRegexIterator::GET_MATCH)));

            Cache::set(self::CACHE_SERVICE_FILES, $files);
        }

        foreach ($files as $file) {
            require_once($file[0]);
        }
    }

}
<?php

namespace App\Helpers;

/**
 * Autoloader
 * 
 * PSR-4 compliant autoloader for the application
 */
class Autoloader
{
    private static $basePath;

    /**
     * Register the autoloader
     * 
     * @param string $basePath
     * @return void
     */
    public static function register($basePath)
    {
        self::$basePath = $basePath;
        spl_autoload_register([self::class, 'load']);
    }

    /**
     * Load class
     * 
     * @param string $class
     * @return void
     */
    public static function load($class)
    {
        // Remove leading namespace separator
        if ($class[0] === '\') {
            $class = substr($class, 1);
        }

        // Check if it's an App class
        if (strpos($class, 'App\\') === 0) {
            $class = substr($class, 4); // Remove "App\" prefix
            $path = self::$basePath . '/' . str_replace('/', '/', $class) . '.php';

            if (file_exists($path)) {
                require_once $path;
            }
        }
    }
}
<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc111873f7621a41e9d31d4ef198ad188
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc111873f7621a41e9d31d4ef198ad188', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc111873f7621a41e9d31d4ef198ad188', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc111873f7621a41e9d31d4ef198ad188::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
<?php

// autoload_real.php @generated by Composer

namespace MyProjects\PDO_SQLite\vendor\composer;
class ComposerAutoloaderInitdcb0f4a49d6777f4a3334e1e4372a015
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

        spl_autoload_register(array('ComposerAutoloaderInitdcb0f4a49d6777f4a3334e1e4372a015', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdcb0f4a49d6777f4a3334e1e4372a015', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdcb0f4a49d6777f4a3334e1e4372a015::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit247d88956d6c8b0852f3c0e8baac6fdf
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit247d88956d6c8b0852f3c0e8baac6fdf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit247d88956d6c8b0852f3c0e8baac6fdf', 'loadClassLoader'));

        $vendorDir = dirname(__DIR__);
        $baseDir = dirname($vendorDir);

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
            composerRequire247d88956d6c8b0852f3c0e8baac6fdf($file);
        }

        return $loader;
    }
}

function composerRequire247d88956d6c8b0852f3c0e8baac6fdf($file)
{
    require $file;
}

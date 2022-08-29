<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8999e7b29dd93320602eb6ee67f46341
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kuliahprogrammer\\BelajarPhpComposerLibrary\\' => 43,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kuliahprogrammer\\BelajarPhpComposerLibrary\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8999e7b29dd93320602eb6ee67f46341::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8999e7b29dd93320602eb6ee67f46341::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8999e7b29dd93320602eb6ee67f46341::$classMap;

        }, null, ClassLoader::class);
    }
}
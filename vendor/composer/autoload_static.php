<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafba691da70e9c8d973e3d48f2ba95ab
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KuliahProgrammer\\Belajar\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KuliahProgrammer\\Belajar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitafba691da70e9c8d973e3d48f2ba95ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafba691da70e9c8d973e3d48f2ba95ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitafba691da70e9c8d973e3d48f2ba95ab::$classMap;

        }, null, ClassLoader::class);
    }
}

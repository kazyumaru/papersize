<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc924ff3e4d49db342fa240175c2ae06e
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kazyumaru\\Papersize\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kazyumaru\\Papersize\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc924ff3e4d49db342fa240175c2ae06e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc924ff3e4d49db342fa240175c2ae06e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc924ff3e4d49db342fa240175c2ae06e::$classMap;

        }, null, ClassLoader::class);
    }
}

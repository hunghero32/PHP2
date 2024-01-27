<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24686a80e57b673698f06f5f19320814
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit24686a80e57b673698f06f5f19320814::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24686a80e57b673698f06f5f19320814::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24686a80e57b673698f06f5f19320814::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe85037f4177f0560354eb99ad7faa77
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe85037f4177f0560354eb99ad7faa77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe85037f4177f0560354eb99ad7faa77::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe85037f4177f0560354eb99ad7faa77::$classMap;

        }, null, ClassLoader::class);
    }
}

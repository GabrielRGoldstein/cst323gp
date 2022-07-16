<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33a235672519a6bc7cc9d110e802d7a4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33a235672519a6bc7cc9d110e802d7a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33a235672519a6bc7cc9d110e802d7a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33a235672519a6bc7cc9d110e802d7a4::$classMap;

        }, null, ClassLoader::class);
    }
}

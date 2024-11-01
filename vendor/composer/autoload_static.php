<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcf1e9b5aa64372ba43a7fb0c571454f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdcf1e9b5aa64372ba43a7fb0c571454f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdcf1e9b5aa64372ba43a7fb0c571454f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdcf1e9b5aa64372ba43a7fb0c571454f::$classMap;

        }, null, ClassLoader::class);
    }
}
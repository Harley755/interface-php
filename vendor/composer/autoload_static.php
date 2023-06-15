<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b805c5f49f4e96627a7d2a6341e2a9a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
            'Class\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
        'Class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b805c5f49f4e96627a7d2a6341e2a9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b805c5f49f4e96627a7d2a6341e2a9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b805c5f49f4e96627a7d2a6341e2a9a::$classMap;

        }, null, ClassLoader::class);
    }
}
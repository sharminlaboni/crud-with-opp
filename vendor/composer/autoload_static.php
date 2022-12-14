<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit801d796d063b1a399bcdda892aa837e0
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pondit\\b7\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pondit\\b7\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit801d796d063b1a399bcdda892aa837e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit801d796d063b1a399bcdda892aa837e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit801d796d063b1a399bcdda892aa837e0::$classMap;

        }, null, ClassLoader::class);
    }
}

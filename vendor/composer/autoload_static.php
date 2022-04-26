<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ce56b8ed3280118ba9f7afe73604e7c
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kaantanis\\Realestate\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kaantanis\\Realestate\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ce56b8ed3280118ba9f7afe73604e7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ce56b8ed3280118ba9f7afe73604e7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ce56b8ed3280118ba9f7afe73604e7c::$classMap;

        }, null, ClassLoader::class);
    }
}
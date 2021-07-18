<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74d4900cdff5c2ad13ff651b530388fe
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automad\\Composer\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automad\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/automad/package-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74d4900cdff5c2ad13ff651b530388fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74d4900cdff5c2ad13ff651b530388fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74d4900cdff5c2ad13ff651b530388fe::$classMap;

        }, null, ClassLoader::class);
    }
}
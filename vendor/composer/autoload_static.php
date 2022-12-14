<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62d9eeaa34097f5bdeb4160bcf67f932
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit62d9eeaa34097f5bdeb4160bcf67f932::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62d9eeaa34097f5bdeb4160bcf67f932::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit62d9eeaa34097f5bdeb4160bcf67f932::$classMap;

        }, null, ClassLoader::class);
    }
}

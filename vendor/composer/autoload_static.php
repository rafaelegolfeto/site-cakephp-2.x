<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f624d30126ad588eec32d923870f685
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ionews\\SiteCakephp2\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ionews\\SiteCakephp2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f624d30126ad588eec32d923870f685::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f624d30126ad588eec32d923870f685::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f624d30126ad588eec32d923870f685::$classMap;

        }, null, ClassLoader::class);
    }
}

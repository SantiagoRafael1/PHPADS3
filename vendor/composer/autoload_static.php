<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e92b08c323efc7e6f286a583eeaa4e8
{
    public static $files = array (
        '73f82de6e4694b094761d25380d687e5' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'Rafa\\Aulamvc\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Rafa\\Aulamvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e92b08c323efc7e6f286a583eeaa4e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e92b08c323efc7e6f286a583eeaa4e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e92b08c323efc7e6f286a583eeaa4e8::$classMap;

        }, null, ClassLoader::class);
    }
}

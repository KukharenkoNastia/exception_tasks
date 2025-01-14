<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78304f6002046464d9dd872dab797b64
{
    public static $files = array (
        '6d229b4bf730a7cacecc09497584f7d4' => __DIR__ . '/../..' . '/public/func.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'E' => 
        array (
            'ExceptionTask\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'ExceptionTask\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78304f6002046464d9dd872dab797b64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78304f6002046464d9dd872dab797b64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78304f6002046464d9dd872dab797b64::$classMap;

        }, null, ClassLoader::class);
    }
}

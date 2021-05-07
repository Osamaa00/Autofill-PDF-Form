<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit006176d9c9455da5c21d7952ae5e8ecd
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mikehaertl\\tmp\\' => 15,
            'mikehaertl\\shellcommand\\' => 24,
            'mikehaertl\\pdftk\\' => 17,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mikehaertl\\tmp\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-tmpfile/src',
        ),
        'mikehaertl\\shellcommand\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-shellcommand/src',
        ),
        'mikehaertl\\pdftk\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-pdftk/src',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit006176d9c9455da5c21d7952ae5e8ecd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit006176d9c9455da5c21d7952ae5e8ecd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit006176d9c9455da5c21d7952ae5e8ecd::$classMap;

        }, null, ClassLoader::class);
    }
}

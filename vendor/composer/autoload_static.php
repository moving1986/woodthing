<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6b9cd12538a30afa620214c7225f50c
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fnr\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fnr\\' => 
        array (
            0 => __DIR__ . '/..' . '/fnr',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6b9cd12538a30afa620214c7225f50c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6b9cd12538a30afa620214c7225f50c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6b9cd12538a30afa620214c7225f50c::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0412564b171cb46dbda4210354e3657
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0412564b171cb46dbda4210354e3657::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0412564b171cb46dbda4210354e3657::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0412564b171cb46dbda4210354e3657::$classMap;

        }, null, ClassLoader::class);
    }
}

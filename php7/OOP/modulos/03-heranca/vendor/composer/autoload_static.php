<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit945c11ba106dc6f44951b5809313932e
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'interfaces\\' => 11,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Interfaces',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit945c11ba106dc6f44951b5809313932e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit945c11ba106dc6f44951b5809313932e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
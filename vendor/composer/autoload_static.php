<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit446b6e893df3ad1260947568347861b9
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPattern\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit446b6e893df3ad1260947568347861b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit446b6e893df3ad1260947568347861b9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

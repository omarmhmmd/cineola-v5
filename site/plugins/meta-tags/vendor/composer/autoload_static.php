<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc77b208eb5fdb7fffa91a4abbe3e824
{
    public static $files = array (
        'cd56e31fe6b953a8e6c7917943b90af0' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PedroBorges\\MetaTags\\' => 21,
            'PedroBorges\\KirbyMetaTags\\' => 26,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PedroBorges\\MetaTags\\' => 
        array (
            0 => __DIR__ . '/..' . '/pedroborges/meta-tags/src',
        ),
        'PedroBorges\\KirbyMetaTags\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc77b208eb5fdb7fffa91a4abbe3e824::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc77b208eb5fdb7fffa91a4abbe3e824::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
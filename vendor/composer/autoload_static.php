<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08bb2d71272c67bc7d692e6b9bcecd0f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08bb2d71272c67bc7d692e6b9bcecd0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08bb2d71272c67bc7d692e6b9bcecd0f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

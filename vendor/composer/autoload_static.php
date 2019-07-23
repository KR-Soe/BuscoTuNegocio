<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9270be551114e6e9e041a0ff81bd91f5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PagoFacil\\lib\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PagoFacil\\lib\\' => 
        array (
            0 => __DIR__ . '/..' . '/pagofacil/php-sdk/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9270be551114e6e9e041a0ff81bd91f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9270be551114e6e9e041a0ff81bd91f5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
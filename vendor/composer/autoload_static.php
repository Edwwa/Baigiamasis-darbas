<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde38f7d90c4600c826a7b510d2487ab8
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KCS\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KCS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde38f7d90c4600c826a7b510d2487ab8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde38f7d90c4600c826a7b510d2487ab8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitde38f7d90c4600c826a7b510d2487ab8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

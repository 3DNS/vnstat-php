<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82d9a0278b51f9c5b11a0355e286f25b
{
    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'Vnstat' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit82d9a0278b51f9c5b11a0355e286f25b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fc68aec339d2435ae3677a30425728c
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'RWAPIClient' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'RWAPIClient\\Client' => __DIR__ . '/../..' . '/src/RWAPIClient/Client.php',
        'RWAPIClient\\Facet' => __DIR__ . '/../..' . '/src/RWAPIClient/Facet.php',
        'RWAPIClient\\Filter' => __DIR__ . '/../..' . '/src/RWAPIClient/Filter.php',
        'RWAPIClient\\Query' => __DIR__ . '/../..' . '/src/RWAPIClient/Query.php',
        'RWAPIClient\\Results' => __DIR__ . '/../..' . '/src/RWAPIClient/Results.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6fc68aec339d2435ae3677a30425728c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6fc68aec339d2435ae3677a30425728c::$classMap;

        }, null, ClassLoader::class);
    }
}

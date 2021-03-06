<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0e90ffec59e092e4562644d9f5495e5
{
    public static $prefixLengthsPsr4 = array (
        'z' => 
        array (
            'zapalm\\prestashopHelpers\\' => 25,
            'zapalm\\phingModule\\' => 19,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'zapalm\\prestashopHelpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/zapalm/prestashopHelpers',
        ),
        'zapalm\\phingModule\\' => 
        array (
            0 => __DIR__ . '/..' . '/zapalm/phing_module',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'BoxberryDetails' => __DIR__ . '/../..' . '/classes/BoxberryDetails.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0e90ffec59e092e4562644d9f5495e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0e90ffec59e092e4562644d9f5495e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0e90ffec59e092e4562644d9f5495e5::$classMap;

        }, null, ClassLoader::class);
    }
}

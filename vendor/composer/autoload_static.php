<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit630d7bd22b64ef66d6201bdc69bad7da
{
    public static $files = array (
        '1083e35284cb885938d2984f55ff0156' => __DIR__ . '/../..' . '/app/Utils/Utils.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Controllers/Controller.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/Controllers/UsersController.php',
        'App\\Core\\Application' => __DIR__ . '/../..' . '/app/Core/Application.php',
        'App\\Core\\Config' => __DIR__ . '/../..' . '/app/Core/Config.php',
        'App\\Core\\Cookie' => __DIR__ . '/../..' . '/app/Core/Cookie.php',
        'App\\Core\\Database' => __DIR__ . '/../..' . '/app/Core/Database.php',
        'App\\Core\\Session' => __DIR__ . '/../..' . '/app/Core/Session.php',
        'App\\Models\\Model' => __DIR__ . '/../..' . '/app/Models/Model.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/Models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit630d7bd22b64ef66d6201bdc69bad7da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit630d7bd22b64ef66d6201bdc69bad7da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit630d7bd22b64ef66d6201bdc69bad7da::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d57897c6d4953146930e5d898cbf82b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d57897c6d4953146930e5d898cbf82b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d57897c6d4953146930e5d898cbf82b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d57897c6d4953146930e5d898cbf82b::$classMap;

        }, null, ClassLoader::class);
    }
}

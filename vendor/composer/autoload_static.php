<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e23e37d8c48e98c6a3ec0b89a67b16d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e23e37d8c48e98c6a3ec0b89a67b16d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e23e37d8c48e98c6a3ec0b89a67b16d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5e23e37d8c48e98c6a3ec0b89a67b16d::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39233ee7ba5fb73307b21b62d5795325
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39233ee7ba5fb73307b21b62d5795325::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39233ee7ba5fb73307b21b62d5795325::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

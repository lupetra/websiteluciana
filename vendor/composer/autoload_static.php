<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97ae1f233222fbc72f03195166d457ea
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit97ae1f233222fbc72f03195166d457ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97ae1f233222fbc72f03195166d457ea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

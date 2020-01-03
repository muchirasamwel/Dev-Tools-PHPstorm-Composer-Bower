<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabc73598795f5f5823ed16fb25a016bc
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'smbSpace\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'smbSpace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'PHP_Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
        'SmbSpace\\Hello' => __DIR__ . '/../..' . '/src/Hello.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabc73598795f5f5823ed16fb25a016bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabc73598795f5f5823ed16fb25a016bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitabc73598795f5f5823ed16fb25a016bc::$classMap;

        }, null, ClassLoader::class);
    }
}

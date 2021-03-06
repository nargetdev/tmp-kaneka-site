<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3438a4bfc092aad40a104edf0a3eb02
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RobThree\\Auth\\' => 14,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RobThree\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/robthree/twofactorauth/lib',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'ZendXml\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendxml/library',
            ),
        ),
        'P' => 
        array (
            'PicoFeed' => 
            array (
                0 => __DIR__ . '/..' . '/fguillot/picofeed/lib',
            ),
        ),
        'B' => 
        array (
            'BaconQrCode' => 
            array (
                0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3438a4bfc092aad40a104edf0a3eb02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3438a4bfc092aad40a104edf0a3eb02::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf3438a4bfc092aad40a104edf0a3eb02::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

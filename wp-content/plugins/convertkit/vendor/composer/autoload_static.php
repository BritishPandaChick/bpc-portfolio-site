<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4e98bd3fa23927c6876f6ec1c7e4dc9
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'oldmine\\RelativeToAbsoluteUrl\\Tests\\' => 36,
            'oldmine\\RelativeToAbsoluteUrl\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'oldmine\\RelativeToAbsoluteUrl\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/oldmine/relative-to-absolute-url/tests',
        ),
        'oldmine\\RelativeToAbsoluteUrl\\' => 
        array (
            0 => __DIR__ . '/..' . '/oldmine/relative-to-absolute-url/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'K' => 
        array (
            'KubAT\\PhpSimple\\HtmlDomParser' => 
            array (
                0 => __DIR__ . '/..' . '/kub-at/php-simple-html-dom-parser/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4e98bd3fa23927c6876f6ec1c7e4dc9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4e98bd3fa23927c6876f6ec1c7e4dc9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd4e98bd3fa23927c6876f6ec1c7e4dc9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
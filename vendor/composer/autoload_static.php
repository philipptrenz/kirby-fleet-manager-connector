<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08e123fca3da1db1dbe261590e0ae2eb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhilippTrenz\\KFMConnector\\' => 26,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhilippTrenz\\KFMConnector\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\CachedKeySet' => __DIR__ . '/..' . '/firebase/php-jwt/src/CachedKeySet.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWK' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWK.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\Key' => __DIR__ . '/..' . '/firebase/php-jwt/src/Key.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'PhilippTrenz\\KFMConnector\\API' => __DIR__ . '/../..' . '/src/API.php',
        'PhilippTrenz\\KFMConnector\\Status' => __DIR__ . '/../..' . '/src/Status.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08e123fca3da1db1dbe261590e0ae2eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08e123fca3da1db1dbe261590e0ae2eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit08e123fca3da1db1dbe261590e0ae2eb::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23f0b13b40efe2bed55967fcf5be63c5
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Stopwatch\\' => 28,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\OptionsResolver\\' => 34,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PhpCsFixer\\' => 11,
        ),
        'G' => 
        array (
            'GeckoPackages\\PHPUnit\\' => 22,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Annotations\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PhpCsFixer\\' => 
        array (
            0 => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/src',
        ),
        'GeckoPackages\\PHPUnit\\' => 
        array (
            0 => __DIR__ . '/..' . '/gecko-packages/gecko-php-unit/src/PHPUnit',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
        ),
    );

    public static $classMap = array (
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'PhpCsFixer\\Tests\\Test\\AbstractFixerTestCase' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/AbstractFixerTestCase.php',
        'PhpCsFixer\\Tests\\Test\\AbstractIntegrationTestCase' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/AbstractIntegrationTestCase.php',
        'PhpCsFixer\\Tests\\Test\\Assert\\AssertTokensTrait' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/Assert/AssertTokensTrait.php',
        'PhpCsFixer\\Tests\\Test\\IntegrationCase' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/IntegrationCase.php',
        'PhpCsFixer\\Tests\\Test\\IntegrationCaseFactory' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/IntegrationCaseFactory.php',
        'SebastianBergmann\\Diff\\Chunk' => __DIR__ . '/..' . '/sebastian/diff/src/Chunk.php',
        'SebastianBergmann\\Diff\\Diff' => __DIR__ . '/..' . '/sebastian/diff/src/Diff.php',
        'SebastianBergmann\\Diff\\Differ' => __DIR__ . '/..' . '/sebastian/diff/src/Differ.php',
        'SebastianBergmann\\Diff\\LCS\\LongestCommonSubsequence' => __DIR__ . '/..' . '/sebastian/diff/src/LCS/LongestCommonSubsequence.php',
        'SebastianBergmann\\Diff\\LCS\\MemoryEfficientImplementation' => __DIR__ . '/..' . '/sebastian/diff/src/LCS/MemoryEfficientLongestCommonSubsequenceImplementation.php',
        'SebastianBergmann\\Diff\\LCS\\TimeEfficientImplementation' => __DIR__ . '/..' . '/sebastian/diff/src/LCS/TimeEfficientLongestCommonSubsequenceImplementation.php',
        'SebastianBergmann\\Diff\\Line' => __DIR__ . '/..' . '/sebastian/diff/src/Line.php',
        'SebastianBergmann\\Diff\\Parser' => __DIR__ . '/..' . '/sebastian/diff/src/Parser.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23f0b13b40efe2bed55967fcf5be63c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23f0b13b40efe2bed55967fcf5be63c5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit23f0b13b40efe2bed55967fcf5be63c5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit23f0b13b40efe2bed55967fcf5be63c5::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

$vendorDir = __DIR__ . '/../../..';

if (file_exists($file = $vendorDir . '/autoload.php')) {
    $loader = require_once $file;
} elseif (file_exists($file = './vendor/autoload.php')) {
    $loader = require_once $file;
} else {
    throw new \RuntimeException("Not found composer autoload");
}

/** @var \Composer\Autoload\ClassLoader $loader */
$loader->add('Ideea\LanguageDetector', array(
    realpath(__DIR__ . '/..') . '/tests'
));

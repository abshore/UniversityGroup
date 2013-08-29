<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Knp\\Component'   , __DIR__.'/../vendor/knp-components/src');
$loader->add('Knp\\Bundle'       , __DIR__.'/../vendor/bundles');


AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;

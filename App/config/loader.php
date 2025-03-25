<?php

$loader = new \Phalcon\Autoload\Loader();

$loader->setDirectories(
  [
    $config->application->controllersDir,
    $config->application->modelsDir
  ]
)->register();

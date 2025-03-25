<?php
// die("config.php cargado correctamente!");
/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));

defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/App');
error_log('APP PATH es : '.APP_PATH);

// spl_autoload_register(function ($class) {
//   error_log("Intentando cargar la clase: " . $class);
// });

return new \Phalcon\Config\Config([
  'database' => [
    'adapter'     => 'Mysql',
    'host'        => '147.182.230.47',
    'username'    => 'ktest',
    'password'    => 'AWXZZK8LDh0W-1',
    'dbname'      => 'test_kubo',
    'charset'     => 'utf8',
  ],
  'application' => [
    'appDir'         => APP_PATH . '/',
    'controllersDir' => APP_PATH . '/Controllers/',
    'modelsDir'      => APP_PATH . '/Models/',
    'migrationsDir'  => APP_PATH . '/migrations/',
    'viewsDir'       => APP_PATH . '/views/',
    'pluginsDir'     => APP_PATH . '/plugins/',
    'libraryDir'     => APP_PATH . '/library/',
    'cacheDir'       => BASE_PATH . '/cache/',
    'baseUri'        => 'https://phalcon-test.gfandino.xyz/',    
  ]
]);




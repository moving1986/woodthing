<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public' );
define("APP", ROOT . '/app' );
define("CORE", ROOT . '/vendor/fnr' );
define("HELPERS", ROOT . '/vendor/fnr/helpers' );
define("CACHE", ROOT . '/tmp/cache' );
define("LOGS", ROOT . '/tmp/logs' );
define("CONFIG", ROOT . '/config' );
define("LAYOUT", 'wood');
define("PATH", 'http://wood-thing.loc');
define("ADMIN", 'http://wood-thing.loc/admin');
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';
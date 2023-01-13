<?php

if(PHP_MAJOR_VERSION <8) {
    die('Необходима верися php 8 и выше');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';

new \fnr\App();




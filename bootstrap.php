<?php

if (is_file(__DIR__ . '/vendor/autoload.php'))
{
    require_once __DIR__ . '/vendor/autoload.php';
}

defined('BLINK_ENV') or define('BLINK_ENV', getenv('BLINK_ENV') ?: 'dev');

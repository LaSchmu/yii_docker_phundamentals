<?php

$dotenv = new Dotenv\Dotenv(__DIR__.'/../..');
$dotenv->load();

$dotenv->required('YII_DEBUG', ['', '0', '1', 'true', true]);
$dotenv->required('YII_ENV', ['dev', 'prod', 'test']);
$dotenv->required(['YII_TRACE_LEVEL']);
$dotenv->required(['APP_NAME', 'APP_SUPPORT_EMAIL', 'APP_ADMIN_EMAIL']);
$dotenv->required(['APP_LANGUAGES']);
$dotenv->required(['DATABASE_DSN', 'DATABASE_USER', 'DATABASE_PASSWORD']);

if (is_file(__DIR__.'/../version')) {
    $version = file_get_contents(__DIR__.'/../version');
} else {
    $version = 'dev';
}
defined('APP_VERSION') or define('APP_VERSION', $version);

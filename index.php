<?php

require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set('America/Kentucky/Louisville');

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.txt', Monolog\Logger::WARNING));

$log->addWarning('Foo');

echo 'Hello, World!';
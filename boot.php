<?php
require __DIR__ . '/vendor/autoload.php';

$app = new Enstart\App;

$app->config->load([
    __DIR__ . '/config.global.php',
    __DIR__ . '/config.local.php',
]);

$app->addPath([
    'root'   => __DIR__,
    'app'    => __DIR__ . '/app',
    'public' => __DIR__ . '/public',
]);

date_default_timezone_set(
    $app->config->get('datetime.timezone', 'UTC')
);

foreach ($app->config->get('providers', []) as $provider) {
    $app->serviceProvider($provider);
}

return $app;

<?php

$app->get('/', 'App\Controllers\HomeController@home', [
    'name' => 'home'
]);

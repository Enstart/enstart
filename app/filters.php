<?php
$app->router->notFound(function () {
    return '404 - Page not found';
});

$app->router->methodNotAllowed(function () {
    return '405 - Method not allowed';
});

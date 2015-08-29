<?php
require '../vendor/autoload.php';
// make a new slim object with view Engine PHPView
$app = new \Slim\Slim(array(
    'templates.path' => __DIR__ ));
$app->get('/', $index = function () use($app) {
    $app->render("index.phtml");
});
$app->run();

<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
		'view' => new \Slim\Views\Twig()
));

$view = $app->view();

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

require 'app/router/router.php';

$app->run();
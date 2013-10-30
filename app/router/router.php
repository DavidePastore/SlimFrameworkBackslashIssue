<?php

//Home Page
$app->get('/', function () use ($app) {
	$app->render('base.twig');
})->name("Home Page");


//Page 1
$app->get('/page1', function () use ($app) {
	$app->render('base.twig');
})->name("Page 1");


//Page 2
$app->get('/page2', function () use ($app) {
	$app->render('base.twig');
})->name("Page 2");

//Page 3
$app->get('/page3', function () use ($app) {
	$app->render('base.twig');
})->name("Page 3");
<?php
ini_set('display_errors',1);
session_start();
date_default_timezone_set('America/Sao_Paulo');
require 'vendor/autoload.php';

$config = ['settings' => [
'addContentLengthHeader' => false,
'displayErrorDetails' => true
]];


$container = new \Slim\Container($config);
/** Twig */

$container['DOCUMENT_URL'] = 'local.cmsj:90';
$container['view'] = function ($container) {

	$view = new \Slim\Views\Twig(['App/Views/Site', 'App/Views/Admin'], [
       // 'cache' => 'path/to/cache'
		'cache' => false
	]);

    // Instantiate and add Slim specific extension
	$basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
	$view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

	return $view;
};

/* Twig END */

$container['ola'] = 'ola';

$app = new \Slim\App($container);

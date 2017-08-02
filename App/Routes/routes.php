<?php 

$app->get('/', function($request, $response, $args) use($container){
	$this->view->render($response, 'home.php');

});

$app->get('/contato', function($request, $response, $args) use($container){
	$this->view->render($response,'contato.php');

});

$app->get('/noticias', function($request, $response, $args) use($container){
	$this->view->render($response,'noticias.php');

});

$app->get('/noticia', function($request, $response, $args) use($container){
	$this->view->render($response,'noticia.php');

});

$app->get('/admin', function ($request, $response, $args) {
		 return $response->withRedirect('/admin/login');
});

$app->group('/admin', function() use($app){
	$app->get('/login', function($request, $response, $args){
		$this->view->render($response, 'login.php');
	});

});
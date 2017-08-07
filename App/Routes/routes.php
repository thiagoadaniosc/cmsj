<?php 

$app->get('/', function($request, $response, $args) use($container){
	$this->view->render($response, 'home.php');

});

$app->get('/pesquisar', function($request, $response, $args) use($container){
	//echo "Sua busca foi: " . $_GET['busca'];
	echo 'Você pesquisou por: ' . $request->getQueryParam('busca');
});

$app->get('/vereadores', function ($request, $response, $args) use($container){
	$this->view->render($response, 'vereadores.php');
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

$app->get('/teste', function($request, $response, $args) use($container){
	$homeController = new App\Controllers\homeController();
	var_dump($homeController->index());
});

$app->get('/admin', function ($request, $response, $args) {
		 return $response->withRedirect('/admin/login');
});

$app->group('/admin', function() use($app){
	$app->get('/login', function($request, $response, $args){
		$this->view->render($response, 'login.php');
	});

});
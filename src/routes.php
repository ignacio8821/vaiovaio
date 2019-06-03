<?php

use Slim\App;
use Slim\Http\Uri;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;
use Slim\Http\Environment;
use Slim\Views\TwigExtension;
use Medoo\Medoo;

return function (App $app) {

	//puedes pasar valores por un arreglo
	$app->get('/', function ($request, $response) {
		return $this->view->render($response, 'index.phtml');
	});

	$app->get('/biobio', function ($request, $response) {
		$db = new \Modelo\Database($this);
		return $this->view->render($response, 'radiograma.html', [
			'Noticias'=>$db->Noticias()
		]);
	});
};

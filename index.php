<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;


$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {//O site sem nenhuma rota, executa isso
    
	$page = new Page();

	$page -> setTpl("index");

});

$app->get('/admin', function() {//O site sem nenhuma rota, executa isso
    
	$pageAdmin = new PageAdmin();

	$pageAdmin -> setTpl("index");

});

$app->run();

 ?>
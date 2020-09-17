<?php

//esse arquivo funciona como o arquivo de rotas de uma aplicação
require __DIR__ . '/../vendor/autoload.php';


// fazer log de todas as requisições
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

$classeControladora = $rotas[$caminho];
/** @var InterfaceControladorRequisicao $controlador*/
$controlador = new $classeControladora();
$controlador->processaRequisicao();


<?php


require_once "vendor/autoload.php";
require_once "src/Buscador.php";

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
// use Alura\BuscadorCursos\Buscador;

$curso = new Buscador(new Client(), new Crawler());


$response = $curso->buscar('https://www.alura.com.br/cursos-online-programacao/php');

foreach($response as $curso){
    echo $curso->textContent . PHP_EOL;
}


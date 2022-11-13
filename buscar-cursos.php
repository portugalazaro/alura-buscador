<?php


require_once "vendor/autoload.php";
// require_once "src/Buscador.php";

use Alura\BuscadorCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;


$curso = new Buscador(new Client(), new Crawler());


$response = $curso->buscar('https://www.alura.com.br/cursos-online-programacao/php');

foreach($response as $curso){
    echo $curso->textContent . PHP_EOL;
}


<?php


require_once "vendor/autoload.php";
// require_once "src/Buscador.php";


require_once "./utils/funcoes.php";
require_once "./utils/teste.php";

new hello();
echo PHP_EOL;

faz();

use Alura\BuscadorCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;


exit();
$curso = new Buscador(new Client(), new Crawler());


$response = $curso->buscar('https://www.alura.com.br/cursos-online-programacao/php');

foreach($response as $curso){
    echo $curso->textContent . PHP_EOL;
}


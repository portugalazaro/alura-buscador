<?php


require_once "vendor/autoload.php";

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$cliente = new Client();

$response = $cliente->request("GET", "https://www.alura.com.br/cursos-online-programacao/php");

$html = $response->getBody();

$crawler  = new Crawler();
$crawler->addHtmlContent($html);


$cursos = $crawler->filter('.card-curso__nome');

foreach($cursos as $curso){
    echo $curso->textContent . PHP_EOL;
}
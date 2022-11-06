<?php

namespace Alura\BuscadorCursos;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class Buscador 
{

    private $httpClient;
    private $crawler;

    public function __construct($httpClient, $crawler)

    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }


    public function buscar(string $url)
    {
        $response = $this->httpClient->request('GET',$url);
        $html = $response->getBody();

        
    }





}
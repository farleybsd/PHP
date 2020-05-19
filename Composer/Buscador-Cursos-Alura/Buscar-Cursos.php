<?php

use GuzzleHttp\Client;

$client = new Client();
$reposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $reposta->getBody();

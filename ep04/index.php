<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/source/Config.php';

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

// CALL BACK -> FORMA MAIS SIMPLES E MAIS HARD CODE

$router->group(null);

// OBTENDO O ACESSO ATRAVÉS DA URL DE FATO

$router->get("/",function ($data){
    echo "<h1>Olá Mundo</h1>";
    var_dump($data);
});

$router->group("ops");
$router->get("/{errcode}",function($data){
    echo "<h1> Erro {$data["errcode"]} </h1>";
    var_dump($data);
});

// FAZ TODA A LEITURA DE ROTAS E EXECUTA ATRAVÉS DA URL
$router->dispatch();

//  INTERPRETANDO ERROS DA APLICAÇÃO, NÃO EXISTE ENTRE OUTROS
if ($router->error()) {
    // para conseguir interpretar, logo acima, chamamos o $router->group()
    $router->redirect("ops/{$router->error()}");
}

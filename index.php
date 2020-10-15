<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("Source\App");
$router->group(null);

$router->get("/", "Web:home");

// $router->get("/", function($data){
//     var_dump($data);
// });

$router->group("ops");
$router->get("/{errcode}", "Web:error");
$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}

<?php

$app->router->addInternal("404", function () use ($app) {
    $app->view->add("base/header", ["title" => "404"]);
    $app->view->add("base/404");
    $app->response->setBody([$app->view, "render"])
                  ->send(404);
});

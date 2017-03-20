<?php

$app->router->add("", function () use ($app) {
    $app->view->add("base/header", ["title" => "Home"]);
    $app->view->add("base/navbar");
    $app->view->add("base/body", ["title" => "Home", "paragraph" => "This is the homepage"]);

    $app->response->setBody([$app->view, "render"])
                  ->send();
});


$app->router->add("about", function () use ($app) {
    $app->view->add("base/header", ["title" => "About"]);
    $app->view->add("base/navbar");
    $app->view->add("base/body", ["title" => "About", "paragraph" => "This is the page about me"]);

    $app->response->setBody([$app->view, "render"])
                  ->send();
});


$app->router->add("status", function () use ($app) {
    $data = [
        "Server" => php_uname(),
        "PHP version" => phpversion(),
        "Included files" => count(get_included_files()),
        "Memory used" => memory_get_peak_usage(true),
        "Execution time" => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],
    ];

    $app->response->sendJson($data);
});

<?php

$app->router->add("", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $urlStatus = $app->url->create("status");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">Home</a> | 
    <a href="$urlAbout">About</a> | 
    <a href="$urlStatus">Status</a>
</navbar>
EOD;

    $body = <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>Home</title>
$navbar
<h1>Home</h1>
<p>This is the homepage.</p>
EOD;

    $app->response->setBody($body)
              ->send();
});

$app->router->add("about", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $urlStatus = $app->url->create("status");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">Home</a> | 
    <a href="$urlAbout">About</a> | 
    <a href="$urlStatus">Status</a>
</navbar>
EOD;

    $body = <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>About</title>
$navbar
<h1>About</h1>
<p>This is the page about me.</p>
EOD;

    $app->response->setBody($body)
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

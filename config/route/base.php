<?php

$app->router->add("", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">Home</a> | 
    <a href="$urlAbout">About</a>
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

    echo $body;
});

$app->router->add("about", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">Home</a> | 
    <a href="$urlAbout">About</a>
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

    echo $body;
});

<?php
$urlHome  = $app->url->create("");
$urlStatus = $app->url->create("status");
$urlAbout = $app->url->create("about");

?><navbar>
<a href="<?= $urlHome ?>">Home</a> | 
<a href="<?= $urlStatus ?>">Status</a> | 
<a href="<?= $urlAbout ?>">About</a>
</navbar>
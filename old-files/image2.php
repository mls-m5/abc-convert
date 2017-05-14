<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$fp = popen("./script.sh", "r");

//http://stackoverflow.com/questions/900207/return-a-php-page-as-an-image
// header("Content-Length: " . filesize($name));

header("Content-Type: image/png");
fpassthru($fp);

exit;

//no trailing space to make sure there is no whitespace added
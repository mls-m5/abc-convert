<?php
//http://stackoverflow.com/questions/900207/return-a-php-page-as-an-image

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$name = 'files/out.png';
// $fp = fopen($name, 'rb');
$fp = popen("./script.sh", "r");

header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

fpassthru($fp);

// exec("./script.sh");
exit;

//no trailing space to make sure there is no whitespace added
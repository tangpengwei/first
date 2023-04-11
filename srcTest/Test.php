<?php

require_once __DIR__ . '/../vendor/autoload.php';

//$hello = new \Tang\App\Hello();
//var_dump($hello->test());

$test = new \Tang\App\Test\Test();
try {
    throw new \Tang\App\FirstException\FirstException('xxx',500,null);
} catch (\Tang\App\FirstException\FirstException $e) {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode($e, JSON_PRETTY_PRINT);
    exit;
}
var_dump($test->xxx());
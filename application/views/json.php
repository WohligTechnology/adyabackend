<?php
$http_origin = $_SERVER['HTTP_ORIGIN'];
header('Content-type: application/javascript');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Max-Age: 86400');
echo json_encode($message);

//
// Access-Control-Allow-Headers: Content-Type
// Access-Control-Allow-Methods: GET, POST, OPTIONS
// Access-Control-Allow-Origin: *

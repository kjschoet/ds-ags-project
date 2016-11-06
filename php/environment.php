<?php


define('DB_CONNECT', 'mysql:host=localhost;dbname=crimson1db');
define('DB_USER', 'crimson1');
define('DB_PASSWORD', 'street-table-knew-19');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contentTypes = explode(';', $_SERVER['CONTENT_TYPE']); //parse content_type headers
    if ($contentTypes[0] == 'application/json') {
        $_POST = json_decode(file_get_contents('php://input'), true);
    }
}

set_include_path(__DIR__);              //everytime you want to search for someting you'll start your search from the environment file

/* require 'models/StockPrice.php'; */
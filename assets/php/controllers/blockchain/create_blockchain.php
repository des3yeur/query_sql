<?php

require_once('../middleware/connect.php');

$name = $_POST['name'];
$logo = $_POST['logo'];
$blockchain = $_POST['blockchain'];
$symbol = $_POST['symbol'];


$db_connect->query("INSERT INTO blockchain (id, name, logo, blockchain, symbol) VALUES (NULL, '$name','$logo', '$blockchain', '$symbol')");

header("Location: http://localhost/public/query_sql");
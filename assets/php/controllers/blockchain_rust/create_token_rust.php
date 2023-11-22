<?php

require_once('../middleware/connect.php');

$token_name = $_POST['token-name'];
$decimals = $_POST['decimals'];

$db_connect->query("INSERT INTO blockchain_rust (id, token_name, decimals) VALUES (NULL, '$token_name', '$decimals')");

header("Location: http://localhost/public/query_sql");
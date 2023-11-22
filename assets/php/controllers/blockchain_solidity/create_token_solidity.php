<?php

require_once('../middleware/connect.php');

$token_name = $_POST['token-name'];
$symbol = $_POST['symbol'];
$decimals = $_POST['decimals'];
$initial_supply = $_POST['initial-supply'];

$db_connect->query("INSERT INTO blockchain_solidity (id, token_name, symbol, decimals, initial_supply) VALUES (NULL, '$token_name', '$symbol', '$decimals', '$initial_supply')");

header("Location: http://localhost/public/query_sql");
<?php 

require_once('../middleware/connect.php');

$id = $_POST['id'];
$token_name = $_POST['token-name'];
$symbol = $_POST['symbol'];
$decimals = $_POST['decimals'];
$initial_supply = $_POST['initial-supply'];

$db_connect->query("UPDATE blockchain_solidity SET id=$id, token_name='$token_name', symbol='$symbol', decimals='$decimals', initial_supply='$supply_supply' WHERE 1");

header("Location: http://localhost/public/query_sql");

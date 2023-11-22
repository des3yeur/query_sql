<?php 

require_once('../middleware/connect.php');

$id = $_POST['id'];
$token_name = $_POST['token-name'];
$decimals = $_POST['decimals'];

$db_connect->query("UPDATE blockchain_rust SET id=$id, token_name='$token_name', decimals='$decimals' WHERE 1");

header("Location: http://localhost/public/query_sql");

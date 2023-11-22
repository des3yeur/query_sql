<?php 

require_once('../middleware/connect.php');

$id = $_POST['id'];
$name = $_POST['name'];
$logo = $_POST['logo'];
$blockchain = $_POST['blockchain'];
$symbol = $_POST['symbol'];

$db_connect->query("UPDATE blockchain SET id=$id, name='$name', logo='$logo', blockchain='$blockchain', symbol='$symbol' WHERE 1");

header("Location: http://localhost/public/query_sql");

<?php 

require_once('../middleware/connect.php');

$id = $_POST['id-delete'];

$db_connect->query("DELETE FROM `blockchain` WHERE id=$id");

header("Location: http://localhost/public/query_sql");
<?php 
require_once('connections/connections.php');

$select_users = "SELECT * FROM `users` WHERE `role` = '1'";
$query_users = mysqli_query($con, $select_users);


 ?>
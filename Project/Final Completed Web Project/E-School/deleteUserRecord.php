<?php

include 'dbConnection.php';
$id = $_GET['user_id'];
$deleteQuery = "DELETE FROM `users` WHERE user_id=$id";
mysqli_query($conn,$deleteQuery);

header('location:displaytables.php');

?>
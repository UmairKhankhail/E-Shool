<?php

include 'dbConnection.php';
$id = $_GET['contact_id'];
$deleteQuery = "DELETE FROM `contact` WHERE contact_id=$id";
mysqli_query($conn,$deleteQuery);

header('location:displaytables.php');

?>
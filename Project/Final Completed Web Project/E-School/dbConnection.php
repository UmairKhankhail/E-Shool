<?php

$username='root';
$server= 'localhost';
$password = '12345';
$db='eschool';


$conn = mysqli_connect($server,$username,$password,$db);

if($conn){
   
    ?>

     <script> alert ("Connection Successful") ;</script>

     <?php

}else{
    die( "  Failed to Connect to MySQL    Error: " . mysqli_connect_errno());
}

?> 
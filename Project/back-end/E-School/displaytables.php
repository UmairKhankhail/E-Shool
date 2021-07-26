<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-School Website</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/logo.png">

    
</head>

<body class="bodyfortable">
<div id="lock_3">
        <header id="main-header">
            <div class="container">
                <div id="logo">
                    <img src="images/logo.png" alt="E-SCHOOL LOGO" width="100" height="100">
                </div>
            </div>
            <div class="container">
                <div class="logout">
                <button class="LogoutButton"><a href="logout.php">Logout</a></button>
            </div>
            </div>
        </header>
        
    </div>
 
    <section id="display_section1" >
     <div class="container">
     <h1>Contact Requests Table</h1>
         <div class="table" >
             <table>
                 <thead >
                       <tr>
                         <th class="contact_id">contact_id</th>
                         <th>name</th>
                         <th>email</th>
                         <th>phone</th>
                         <th>comment</th>
                         <th>created_at</th>
                         <th colspan="2">operation</th>
                     </tr>
                 </thead>
                 <tbody>

                 <?php

                    include ('dbConnection.php');

                    $selectQuery = " SELECT * FROM `contact` ";

                    $query = mysqli_query($conn,$selectQuery);

                    while($result = mysqli_fetch_array($query)){

                        ?>

                    <tr>
                        <td class="contact_id"><?php echo $result['contact_id']; ?></td>
                        <td><?php echo $result['name'] ;?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['phone'] ;?></td>
                        <td><?php echo $result['comment'] ;?></td>
                        <td><?php echo $result['created_at']; ?></td>
                        <td><a href="contactDbUpdate.php?contact_id=<?php echo $result['contact_id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i></a></td>
                        <td><a href="deleteContactRecord.php?contact_id=<?php echo $result['contact_id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash"></i></a></i></td>
                    </tr>

                    <?php
                    }

?>


                 </tbody>

             </table>
         </div>
     </div>   
 </section>

 <section id="display_section2">
 <div class="container">
    <h1>User Table</h1>

    <div class="table" >
             <table>
                 <thead>
                       <tr>
                         <th class="user_id">user_id</th>
                         <th>Username</th>
                         <th>email</th>
                         <th>Designation</th>
                         <th>phone</th>
                         <th>password</th>
                         <th>created_at</th>
                         <th colspan="2">operation</th>
                     </tr>
                 </thead>
                 <tbody>

                 <?php

                    include ('dbConnection.php');

                    $selectQuery = " SELECT * FROM `users` ";

                    $query = mysqli_query($conn,$selectQuery);

                    while($result = mysqli_fetch_array($query)){

                        ?>

                    <tr>
                        <td class="contact_id"><?php echo $result['user_id']; ?></td>
                        <td><?php echo $result['username'] ;?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['designation'] ;?></td>
                        <td><?php echo $result['phone'] ;?></td>
                        <td><?php echo $result['password'] ;?></td>
                        <td><?php echo $result['created_at']; ?></td>
                        <td><a href="userDbUpdate.php?user_id=<?php echo $result['user_id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit"></i></a></td>
                        <td><a href="deleteUserRecord.php?user_id=<?php echo $result['user_id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash"></i></a></i></td>
                    </tr>

                    <?php
                    }

?>


                 </tbody>

             </table>
         </div>
        
    </div>   

 </section>


<script> 
$(document).ready(function(){ $('[data-toggle="tooltip"]').tooltip();});
</script>

</body>
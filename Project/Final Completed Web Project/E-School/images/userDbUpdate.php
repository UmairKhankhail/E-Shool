<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-School Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/logo.png">
</head>

<body>
    <div class="lock_2">
        <header id="main-header">
            <div class="container">
                <div id="logo">
                    <img src="images/logo.png" alt="E-SCHOOL LOGO" width="100" height="100">
                </div>
            </div>

        </header>
        <nav id="navbar">
            <div class="container">
               <ul>
                    <li><a href="displaytables.php">Back to Table Data</a></li>
               </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div id="contact_sections">

            <section id="SignUp">

<?php

include ('dbConnection.php');

$ids=$_GET['user_id'];
$Query= "select * from users where user_id={$ids}";
$showQuery = mysqli_query($conn,$Query) or die( mysqli_error($conn));
$arrayData = mysqli_fetch_array($showQuery);

//values retreive only when submit is clicked
if (isset($_POST['submit'])){

    $id1=$_GET['user_id'];

    $username=htmlspecialchars($_POST['username']);
    $email=htmlspecialchars($_POST['email']);
    $des=htmlspecialchars($_POST['des']);
    $phone=htmlspecialchars($_POST['phone']);
    $password=($_POST['password']);

    $updateQuery= " UPDATE `users` SET `user_id`=$id1,`username`='$username',`email`='$email',`designation`='$des', `phone`='$phone',`password`='$password' WHERE `user_id`=$id1";
    
    //UPDATE `users` SET `user_id`='[value-1]',`username`='[value-2]',`email`='[value-3]',`designation`='[value-4]',`phone`='[value-5]',`password`='[value-6]',`created_at`='[value-7]' WHERE 1
    $result = mysqli_query($conn,$updateQuery);
    if($result){
        ?>
          <script> alert('Data Updated'); window.location="displaytables.php"; </script>
        
        <?php   
    }else{
        ?>
          <script> alert('Data not Updated'); </script>
        <?php
    }
   
} 
?>


                <form name="myForm" action="userDbUpdate.php?user_id=<?php echo $_GET['user_id']; ?>" onsubmit="return Reconfirm_Password()" method="post">
                    <fieldset>

                        <div id="LIT">


                            <label>Username</label><input type="text" name="username"  value = "<?php echo $arrayData['username'] ?>" placeholder="Enter Username" required><br>
                            <label>Email</label> <input type="email" name="email" value = "<?php echo $arrayData['email'] ?>" placeholder="Enter Email" required><br>
                            <label>Designation</label>
                            <select name="des" id="des">
                              <option selected value="<?php echo $arrayData['designation']?>"><?php echo $arrayData['designation'] ?></option>
                              <option value="Student">Student</option>
                              <option value="Teacher">Teacher</option>
                              <option value="Admin">Admin</option>
                            </select>
                            <br><br><br>
                            <label>Phone</label><input type="tel" pattern="[0]{1}[3]{1}[0-9]{9}" name="phone" value = "<?php echo $arrayData['phone'] ?>" placeholder="Enter Phone Number" required><br>
                            <small>FORMAT: 03XZ-YYYYYYY </small><br><br>
                            <label>Password</label> <input type="password" id="password" name="password" placeholder="Enter Password" value = "<?php echo $arrayData['password'] ?>" required>
                            <span id="message" style="color:rgb(175, 141, 53)"> </span> <br><br>
                            <label>Re-Enter Password</label> <input type="password" id="re" placeholder="Repeat Password" name="psw-repeat" value = "<?php echo $arrayData['password'] ?>"required>
							<button type="submit" name="submit" class="Submit">UPDATE</button>
                            <button id="reset" type="reset" value="Reset">Reset</button>
                        </div>

                    </fieldset>
                </form>

                <script src="script.js">
                </script>
            </section>
        </div>

    </div>

    <footer id="main-footer">
        <p>Copyright &copy;2021 E-School</p>
    </footer>

</body>
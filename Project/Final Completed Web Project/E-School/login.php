<?php

session_start();

?>

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
<?php


include ('dbConnection.php');

//values retreive only when submit is clicked
if (isset($_POST['submit'])){

    $username=htmlspecialchars($_POST['username']);
    $email=htmlspecialchars($_POST['email']);
    $des=htmlspecialchars($_POST['des']);
    $password=($_POST['password']);

    $pass = password_hash($password, PASSWORD_BCRYPT);

    $emailQuery = "SELECT * FROM `users` WHERE `email`='$email'";
    $emailSqlQuery= mysqli_query($conn,$emailQuery);
    $noOfEmailInRecord = mysqli_num_rows($emailSqlQuery);
    if($noOfEmailInRecord){
        $User_Password = mysqli_fetch_assoc($emailSqlQuery);
        $DB_UserPassword = $User_Password['password'];
        $DB_Des = $User_Password['designation'];
        $DB_User = $User_Password['username'];

        $_SESSION['username'] = $User_Password['username'];
        if($DB_Des===$des && $DB_UserPassword===$password &&  $DB_User===$username){
            
            ?>
             <script>alert('Login Successful');</script>
           <?php

           if($DB_Des=='Admin')header('location:displaytables.php');
           if($DB_Des=='Student')header('location:student.php');
           if($DB_Des=='Teacher')header('location:teacher.php');


        }else{
        
            if($DB_User!=$username){
                ?>
                <script> alert('Username is Incorrect'); </script>
              <?php
            }
           if($DB_Des!=$des){
               ?>
               <script> alert('Designation is Incorrect'); </script>
               <?php
            }
           if($DB_UserPassword!=$password){
                 ?>
            <script> alert('Password is Incorrect'); </script>
                 <?php
        }
       
    }

    }else{
        ?>
        <script> alert('Invalid Email'); </script>
        <?php
    }
}
   
?>


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
            <h1>User Login</h1>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div id="contact_sections">

            <section id=Login>
                <form name="myForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" onsubmit="return verifyPassword()" method="post">
                    <fieldset>

                        <div id="LIT">
                            <label>Username</label><input type="text" name="username" placeholder="Enter Username" required><br>
                            <label>Email</label> <input type="email" name="email" placeholder="Enter Email" required><br>
                            <label>Designation</label>
                            <select name="des" id="des">
                              <option value="Student">Student</option>
                              <option value="Teacher">Teacher</option>
                              <option value="Admin">Admin</option>
                            </select>
                            <br><br><br>
                            <label>Password</label> <input type="password" id="password" name="password" value="" placeholder="Enter Password" required>
                            <span id="message" style="color:rgb(175, 141, 53)"> </span> <br><br>

							<button type="submit" name="submit" class="Submit">Login</button>
                            <button id="reset" type="reset" value="Reset">Reset</button>
                </form>
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
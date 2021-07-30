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
    $phone=htmlspecialchars($_POST['phone']);
    $password=($_POST['password']);
    $cpassword=($_POST['psw-repeat']);

    $pass = password_hash($password, PASSWORD_BCRYPT);

    require_once 'VerifyEmailClass.php'; 
    $mail = new VerifyEmail();
    $mail->setStreamTimeoutWait(5);
    $mail->Debug= FALSE; 
    $mail->Debugoutput= 'html'; 
    $mail->setEmailFrom('siddraamiz@email.com');
    $emailC = $email; 
    
    if($mail->check($emailC)){ 
        echo 'Email &lt;'.$emailC.'&gt; is valid, and exist!';

        $emailQuery = "SELECT * FROM `users` WHERE `email`='$email'";
        $emailSqlQuery= mysqli_query($conn,$emailQuery);
        $noOfEmailInRecord = mysqli_num_rows($emailSqlQuery); 
        
        if($noOfEmailInRecord>0){
            ?>
            <script>alert('Email Already Exists Change Email Address');</script>
            <?php
        }else{
               
            if($password === $cpassword){
                    $insertQuery= " INSERT INTO `users`(`username`, `email`, `designation`, `phone`, `password`) VALUES ('$username','$email','$des','$phone', '$password')";
                    $result = mysqli_query($conn,$insertQuery);
                    if($result){
                        ?>
                          <script> alert('Data Inserted'); </script>
                        <?php   
                        header('location:login.php');
                    }else{
                        ?>
                          <script> alert('Data not Inserted'); </script>
                        <?php
                    }
            }else{
                    ?>
                    <script>alert('Passwords Do Not Match');</script>
                    <?php
                }
        
               
        }
        
    }elseif(verifyEmail::validate($emailC)){ 
    echo 'Email &lt;'.$emailC.'&gt; is valid, but not exist!';
    
    }else{ 
    echo 'Email &lt;'.$emailC.'&gt; is not valid and not exist!';} 


    
    
  
   
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

                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div id="contact_sections">

            <section id="SignUp">
                <form name="myForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" onsubmit="return Reconfirm_Password()" method="post">
                    <fieldset>

                        <div id="LIT">


                            <label>Username</label><input type="text" name="username" placeholder="Enter Username" required><br>
                            <label>Email</label> <input type="email" name="email" placeholder="Enter Email" required><br>
                            <label>Designation</label>
                            <select name="des" id="des">
                              <option value="Student">Student</option>
                              <option value="Teacher">Teacher</option>
                            </select>
                            <br><br><br>
                            <label>Phone</label><input type="tel" pattern="[0]{1}[3]{1}[0-9]{9}" name="phone" placeholder="Enter Phone Number" required><br>
                            <small>FORMAT: 03XZ-YYYYYYY </small><br><br>
                            <label>Password</label> <input type="password" id="password" name="password" placeholder="Enter Password" value="" required>
                            <span id="message" style="color:rgb(175, 141, 53)"> </span> <br><br>
                            <label>Re-Enter Password</label> <input type="password" id="re" placeholder="Repeat Password" name="psw-repeat" required>
							<button type="submit" name="submit" class="Submit">Submit</button>
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
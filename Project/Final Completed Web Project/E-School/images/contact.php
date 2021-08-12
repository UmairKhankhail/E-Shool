<?php
session_start();
include ('dbConnection.php');

//values retreive only when submit is clicked
if (isset($_POST['submit'])){

    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);
    $comment=htmlspecialchars($_POST['comment']);

    $insertQuery= " INSERT INTO `contact`(`name`, `email`, `phone`, `comment`) VALUES ('$name','$email','$phone','$comment')";
    
    $result = mysqli_query($conn,$insertQuery);
    if($result){
        ?>
          <script> alert('Data Inserted'); </script>
        <?php   
    }else{
        ?>
          <script> alert('Data not Inserted'); </script>
        <?php
    }
   
} 
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
            <section id="sec1">
                <h1>Welcome</h1>
                <p>Please fill the form and enter your queries in the Comment Box!</p>
            </section>

            <section>
            <form name="myForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>"  method="post">
                    <fieldset>
                        <legend>Contact Us</legend>

                        <div id="LIT">
                            <label>Name</label><input type="text" name="name" placeholder="Enter Name" required><br>
                            <label>Email</label> <input type="email" name="email" placeholder="Enter Email" required><br>
                            <label>Phone</label><input type="tel" pattern="[0]{1}[3]{1}[0-9]{9}" name="phone" placeholder="Enter Phone Number" required><br>
                            <small>FORMAT: 03XZ-YYYYYYY </small><br><br>
                            <label>Comment</label><textarea name="comment" placeholder="Enter Details" required></textarea><br>
			     			<button type="submit" name="submit" >Submit</button>
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
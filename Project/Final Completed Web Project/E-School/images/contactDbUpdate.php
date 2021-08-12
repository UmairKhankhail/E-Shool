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
            <section id="sec1">
                <h1>Welcome</h1>
                <p>Please fill the form and enter your queries in the Comment Box!</p>
            </section>

            <section>
<?php
#this file is for modifying database (contact)

include ('dbConnection.php');

$ids=$_GET['contact_id'];
$Query= "select * from contact where contact_id={$ids}";
$showQuery = mysqli_query($conn,$Query) or die( mysqli_error($conn));
$arrayData = mysqli_fetch_array($showQuery);

//values retreive only when submit is clicked
if (isset($_POST['submit'])){
    $id1=$_GET['contact_id'];

    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);
    $comment=htmlspecialchars($_POST['comment']);  

    
    $updateQuery= " UPDATE `contact` SET `contact_id`=$ids,`name`='$name',`email`='$email',`phone`='$phone',`comment`='$comment' WHERE contact_id=$id1";

    $result = mysqli_query($conn,$updateQuery);
    if($result){
        ?>
          <script> alert('Data Updated'); window.location="displaytables.php"; </script>
        <?php   
    }else{
        ?>
          <script> alert('Data not  Updated'); </script>
        <?php
    }
   
} 
?>

            <form name="myForm" action="contactDbUpdate.php?contact_id=<?php echo $_GET['contact_id']; ?>"  method="post">
                    <fieldset>
                        <legend>Contact Us</legend>

                        <div id="LIT">
                            <label>Name</label><input type="text" name="name" value = "<?php echo $arrayData['name'] ?>" ><br>
                            <label>Email</label> <input type="email" name="email"  value = "<?php echo $arrayData['email'] ?>"><br>
                            <label>Phone</label><input type="tel" pattern="[0]{1}[3]{1}[0-9]{9}" name="phone"  value = "<?php echo $arrayData['phone'] ?>"><br>
                            <small>FORMAT: 03XZ-YYYYYYY </small><br><br>
                            <label>Comment</label><textarea name="comment" ><?php echo $arrayData['comment'] ?></textarea><br>
			     			<button type="submit" name="submit" >UPDATE</button>
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
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
                <form name="myForm" action="#" onsubmit="return verifyPassword()" method="post">
                    <fieldset>

                        <div id="LIT">
                            <label>Username</label><input type="text" name="name" placeholder="Enter Username" required><br>
                            <label>Email</label> <input type="email" name="email" placeholder="Enter Email" required><br>
                            <label>Designation</label>
                            <select name="des" id="des">
                              <option value="Student">Student</option>
                              <option value="Teacher">Teacher</option>
                              <option value="Admin">Admin</option>
                            </select>
                            <br><br><br>
                            <label>Password</label> <input type="password" id="password" value="" placeholder="Enter Password" required>
                            <span id="message" style="color:rgb(175, 141, 53)"> </span> <br><br>

							<button type="submit" name="submit" class="Submit">Submit</button>
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
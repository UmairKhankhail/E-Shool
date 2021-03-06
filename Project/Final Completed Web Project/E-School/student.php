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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/logo.png">

</head>

<body>

    <div id="lockStudent">
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


    <section id="showcase">
        <div class=" slideshow-container ">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade ">
                <div class="numbertext ">1 / 3</div>
                <img src="images/event0.jpg" style="width:100%">
                <div class="text "></div>
            </div>

            <div class="mySlides fade ">
                <div class="numbertext ">2 / 3</div>
                <img src="images/event.png " style="width:100%">
                <div class="text "></div>
            </div>

            <div class="mySlides fade ">
                <div class="numbertext ">3 / 3</div>
                <img src="images/event2.jpg " style="width:100%">
                <div class="text "></div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev " onclick="plusSlides(-1) ">&#10094;</a>
            <a class="next " onclick="plusSlides(1) ">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center ">
            <span class="dot " onclick="currentSlide(1) "></span>
            <span class="dot " onclick="currentSlide(2) "></span>
            <span class="dot " onclick="currentSlide(3) "></span>
        </div>

        <script src="script.js"></script>

    </section>
    <div class="container">
    <section class="timetable">
    <h1 class="timetable"  align="center">TIME TABLE</h1>
    <table class="timetable" border="5" cellspacing="0" align="center">
        
        <!--Timetable-->

        <tr class="timetable">
            <td align="center" height="50%" 
                width="10%"><br>
                <b>Day/Period</b></br>
            </td>
            <td align="center" height="50%" 
                width="10%">
                <b>I<br>9:30-10:20</b>
            </td>
            <td align="center" height="50%" 
                width="10%">
                <b>II<br>10:20-11:10</b>
            </td>
            <td align="center" height="50%" 
                width="10%">
                <b>III<br>11:10-12:00</b>
            </td>
            <td align="center" height="50%" 
                width="10%">
                <b>12:00-12:40</b>
            </td>
            <td align="center" height="50%" 
                width="10%">
                <b>IV<br>12:40-1:30</b>
            </td>
            <td align="center" height="50%" 
                width="10%">
                <b>V<br>1:30-2:20</b>
            </td>
            <td align="center" height="50%" 
                width="10%">
                <b>VI<br>2:20-3:10</b>
            </td>
            <td align="center" height="50%" 
                width="10%">
                <b>VII<br>3:10-4:00</b>
            </td>
        </tr>
        <tr class="timetable">
            <td align="center" height="50%">
                <b>Monday</b></td>
            <td align="center" height="50%">Eng</td>
            <td align="center" height="50%">Mat</td>
            <td align="center" height="50%">Che</td>
            <td rowspan="6" align="center" height="50%">
                <h2>L<br>U<br>N<br>C<br>H</h2>
            </td>
            <td colspan="3" align="center" 
                height="50%">LAB</td>
            <td align="center" height="50%">Phy</td>
        </tr>
        <tr class="timetable">
            <td align="center" height="50%">
                <b>Tuesday</b>
            </td>
            <td colspan="3" align="center" 
                height="50%">LAB
            </td>
            <td align="center" height="50%">Eng</td>
            <td align="center" height="50%">Che</td>
            <td align="center" height="50%">Mat</td>
            <td align="center" height="50%">SPORTS</td>
        </tr>
        <tr class="timetable">
            <td align="center" height="50%">
                <b>Wednesday</b>
            </td>
            <td align="center" height="50%">Mat</td>
            <td align="center" height="50%">phy</td>
            <td align="center" height="50%">Eng</td>
            <td align="center" height="50%">Che</td>
            <td colspan="3" align="center" 
                height="50">LIBRARY
            </td>
        </tr>
        <tr class="timetable">
            <td align="center" height="50%">
                <b>Thursday</b>
            </td>
            <td align="center" height="50%">Phy</td>
            <td align="center" height="50%">Eng</td>
            <td align="center" height="50%">Che</td>
            <td colspan="3" align="center" 
                height="50%">LAB
            </td>
            <td align="center" height="50%">Mat</td>
        </tr>
        <tr class="timetable">
            <td align="center" height="50%">
                <b>Friday</b>
            </td>
            <td colspan="3" align="center" 
                height="50%">LAB
            </td>
            <td align="center" height="50%">Mat</td>
            <td align="center" height="50%">Che</td>
            <td align="center" height="50%">Eng</td>
            <td align="center" height="50%">Phy</td>
        </tr>
        <tr class="timetable">
            <td align="center" height="50%">
                <b>Saturday</b>
            </td>
            <td align="center" height="50%">Eng</td>
            <td align="center" height="50%">Che</td>
            <td align="center" height="50%">Mat</td>
            <td colspan="3" align="center" 
                height="50%">SEMINAR
            </td>
            <td align="center" height="50%">SPORTS</td>
        </tr>
    </table>

</section>
    </div>
 

    <footer id="main-footer">
        <p>Copyright &copy;2021 E-School</p>
    </footer>

</body>

</html>
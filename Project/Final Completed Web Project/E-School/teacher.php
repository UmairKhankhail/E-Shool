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
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" href="images/logo.png">

</head>

<body>

<div id="lockT">
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

    <div class="container" >
    <section class="timetable">

        <h1 class="timetable"  align="center">Teachers' Schedule</h1>
        
        <div">
        
            <table class="timetable" border="5" cellspacing="0" align="center">
            
            <!--Timetable-->
    
            <tr class="timetable">
                <td class=timetable align="center" height="50%" 
                    width="10%"><br>
                    <b>Day/Period</b></br>
                </td>
                <td class=timetable align="center" height="50%" 
                    width="10%">
                    <b>I<br>9:30-10:20</b>
                </td>
                <td class=timetable align="center" height="50%" 
                    width="10%">
                    <b>II<br>10:20-11:10</b>
                </td>
                <td class=timetable align="center" height="50%" 
                    width="10%">
                    <b>III<br>11:10-12:00</b>
                </td>
                <td class=timetable align="center" height="50%" 
                    width="10%">
                    <b>12:00-12:40</b>
                </td>
                <td class=timetable align="center" height="50%" 
                    width="10%">
                    <b>IV<br>12:40-1:30</b>
                </td>
                <td class=timetable align="center" height="50%" 
                    width="10%">
                    <b>V<br>1:30-2:20</b>
                </td>
                <td class=timetable align="center" height="50%" 
                    width="10%">
                    <b>VI<br>2:20-3:10</b>
                </td>
                <td class=timetable align="center" height="50%" 
                    width="10%">
                    <b>VII<br>3:10-4:00</b>
                </td>
            </tr>
            <tr class="timetable">
                <td align="center" height="50%">
                    <b>Monday</b></td>
                <td align="center" height="50%">Sir Moiz</td>
                <td align="center" height="50%">Sir Kamran</td>
                <td align="center" height="50%">Sir Mukarram</td>
                <td rowspan="6" align="center" height="50%">
                    <h2>L<br>U<br>N<br>C<br>H</h2>
                </td>
                <td colspan="3" align="center" 
                    height="50%">LAB</td>
                <td align="center" height="50%">Sir Saddam</td>
            </tr>
            <tr class="timetable">
                <td align="center" height="50%">
                    <b>Tuesday</b>
                </td>
                <td colspan="3" align="center" 
                    height="50%">LAB
                </td>
                <td align="center" height="50%">Sir Umair</td>
                <td align="center" height="50%">Sir Mukarram</td>
                <td align="center" height="50%">Sir Kamran</td>
                <td align="center" height="50%">SPORTS</td>
            </tr>
            <tr class="timetable">
                <td align="center" height="50%">
                    <b>Wednesday</b>
                </td>
                <td align="center" height="50%">Sir Kamran</td>
                <td align="center" height="50%">Sir Saddam</td>
                 <td align="center" height="50%">Sir Umair</td>
                <td align="center" height="50%">Sir Mukarram</td>
                <td colspan="3" align="center" 
                    height="50">LIBRARY
                </td>
            </tr>
            <tr class="timetable">
                <td align="center" height="50%">
                    <b>Thursday</b>
                </td>
                <td align="center" height="50%">Sir Saddam</td>
                <td align="center" height="50%">Sir Umair</td>
                <td align="center" height="50%">Sir Mukarram</td>
                <td colspan="3" align="center" 
                    height="50%">LAB
                </td>
                <td align="center" height="50%">Sir Kamran</td>
            </tr>
            <tr class="timetable">
                <td align="center" height="50%">
                    <b>Friday</b>
                </td>
                <td colspan="3" align="center" 
                    height="50%">LAB
                </td>
                <td align="center" height="50%">Sir Kamran</td>
                <td align="center" height="50%">Sir Mukarram</td>
                <td align="center" height="50%">Sir Umair</td>
                <td align="center" height="50%">Sir Saddam</td>
            </tr>
            <tr class="timetable">
                <td align="center" height="50%">
                    <b>Saturday</b>
                </td>
                <td align="center" height="50%">Sir Umair</td>
                <td align="center" height="50%">Sir Mukarram</td>
                <td align="center" height="50%">Sir Kamran</td>
                <td colspan="3" align="center" 
                    height="50%">SEMINAR
                </td>
                <td align="center" height="50%">SPORTS</td>
            </tr>
        </table>
    
    </div>
    
</section>
</div>
</br></br></br>
    <div class="container">
        <section id="main">
            <h1>Responsibilities Of a Teacher:</h1>
            <ul>
                <li>To plan and prepare appropriately the assigned courses and lectures.</li><br>
                <li>To conduct assigned classes at the scheduled times.</li></br>
                <li>To demonstrate competence in classroom instruction.</li></br>
                <li>To implement the designated curriculum completely and in due time.</li></br>
                <li>To plan and implement effective classroom management practices.</li></br>
            </ul>
        </section>
</br></br></br>
        <aside id="sidebar">
            <p><i> ???I never teach my pupils; I only attempt to provide the conditions in which they can learn.??? </br>???Albert Einstein </i></p></i></p>
        </aside>
    </div>

    <footer id="main-footer">
        <p>Copyright &copy;2021 E-School</p>
    </footer>

</body>

</html>
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

    <div id="lock">
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


    <section id="showcase">
        <div class=" slideshow-container ">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade ">
                <div class="numbertext ">1 / 3</div>
                <img src="images/img1.jpg" style="width:100%">
                <div class="text "></div>
            </div>

            <div class="mySlides fade ">
                <div class="numbertext ">2 / 3</div>
                <img src="images/img2.png " style="width:100%">
                <div class="text "></div>
            </div>

            <div class="mySlides fade ">
                <div class="numbertext ">3 / 3</div>
                <img src="images/img3.jpg " style="width:100%">
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
    <section id="main">
            <h1>Welcome</h1>
            <p>Our aim is the pursuit of excellence for all. We strive for the development of individual potential in a stimulating and inspiring school that is at the heart of the local community. E-School aims to create a welcoming and exciting learning environment where we Provide a rich, diverse and challenging education through excellent and innovative teaching and learning. Celebrate success, promote a "can do" attitude and inspire each to achieve their best. Support personal development, social responsibility and a sense of self-worth. Develop the attitudes and skills that support a healthy and fulfilled life together with the confidence for a lifetime of learning. Work as partners in learning with students, parents/carers and the community. Provide a safe, supportive and well-ordered environment where students and staff are happy and confident as they aspire to achieve.</p>
            
        </section>

        <aside id="sidebar">
	    <h3>Why join us?</h3>
            <ul>
                <li> Highly Professional Teachers</li>
                <li> Promote Conceptual Learning</li>
                <li> Individual Attention Provided</li>
                <li> Well Trained Staff</li>
            </ul>
			<p><i>“ We have found an institution that provides a comprehensive Islamic environment, a rigorous secular education, diverse classrooms, and dedicated management and staff. ”</i></p></i></p>
        
        </aside>
    </div>

    <footer id="main-footer">
        <p>Copyright &copy;2021 E-School</p>
    </footer>

</body>

</html>

<?php

?>
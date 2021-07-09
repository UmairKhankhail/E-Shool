//slides//
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

//open after submit
function Index() {
    window.open("index.html")
}

function verifyPassword() {
    var pw = document.getElementById("password").value;
    //check empty password field
    if (pw == "") {
        document.getElementById("message").innerHTML = "**Fill the password please!";
        return false;

    }

    //minimum password length validation
    if (pw.length < 8) {
        document.getElementById("message").innerHTML = "**Password length must be at least 8 characters";
        return false;
    }

    //maximum length of password validation
    if (pw.length > 15) {
        document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
        return false;

    }

}

function Reconfirm_Password() {
    var pw = document.getElementById("password").value;
    var cp = document.getElementById("re").value;

    if (pw.length < 8) {
        document.getElementById("message").innerHTML = "**Password length must be at least 8 characters";
        return false;
    }

    if (pw.length > 15) {
        document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
        return false;

    }

    if (pw != cp) {
        document.getElementById("message").innerHTML = "**Passwords Do Not Match";
        return false;
    }

}
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
        document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
        return false;
    }

    //maximum length of password validation
    if (pw.length > 15) {
        document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
        return false;

    }

    return window.open("index.html");
}

function Reconfirm_Password() {
    var pw = document.getElementById("password").value;
    var cp = document.getElementById("re").value;

    if (pw.length < 8) {
        document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
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
    return window.open("index.html");

}
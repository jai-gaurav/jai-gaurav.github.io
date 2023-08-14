function validateRegistration() {
    var password1 = document.getElementById("pwd1").value;
    var password2 = document.getElementById("pwd2").value;

    if (password1 !== password2) {
        alert("Passwords do no match!")
        return false;
    }

    return true;
}
function Validate() {
    var password = document.getElementById("pwd").value;
    var confirmPassword = document.getElementById("cpwd").value;
    if (password != confirmPassword) {
        document.getElementById('error').innerHTML = 'Passwords do not match';
    }
    else {
        return true
    }
}
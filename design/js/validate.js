function comparePasswords() {
    var pw1 = document.getElementById('');
    var pw2 = document.getElementById('');
    if (pw1.innerHTML != pw2.innerHTML) {
        pw1.className += 'input_error';
        return false;
    }
    return true;
}

function input_error() {
    var username = document.getElementById('input_username');
    var password = document.getElementById('input_password');
    var infobox = document.getElementById('input_error_notify');
    console.log('was here');
    password.className += ' input_error';
    username.className += ' input_error';
    infobox.style.display = 'block';
}
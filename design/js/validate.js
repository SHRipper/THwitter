function comparePasswords() {
    var pw1 = document.getElementById('input_password');
    var pw2 = document.getElementById('input_password_confirm');
    var infobox = document.getElementById('input_error_notify');

    if (pw1.innerHTML != pw2.innerHTML || (pw1.innerHTML == '' && pw2.innerHTML == '')) {
        pw1.className += ' input_error';
        pw2.className += ' input_error';
        infobox.style.display = 'block';
        infobox.style.marginTop = '10px';
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
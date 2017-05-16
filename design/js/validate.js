function comparePasswords() {
    var pw1 = document.getElementById('input_password');
    var pw2 = document.getElementById('input_password_confirm');
    // true if they match and are not empty
    return (pw1.value == pw2.value && pw1.value != '' && pw2.value != '');
}

function login_error() {
    var username = document.getElementById('input_username');
    var password = document.getElementById('input_password');
    var infobox = document.getElementById('login_error_notify');
    password.className += ' input_error';
    username.className += ' input_error';
    infobox.style.display = 'block';
}

function register_error(type) {
    if (type == 'user') {
        document.getElementById('user_exists_error').style.display = 'block';
        document.getElementById('input_username').className += ' input_error';
        return;
    }
    if (type == 'email') {
        var email_exists = document.getElementById('email_exists_error');
        email_exists.style.display = 'block';
        email_exists.style.marginTop = '10px';
        document.getElementById('input_email').className += ' input_error';
        return;
    }
    if (type == 'pw') {
        document.getElementById('input_password').className += ' input_error';
        document.getElementById('input_password_confirm').className += ' input_error';
        var infobox = document.getElementById('pw_no_match_error');
        infobox.style.display = 'block';
        infobox.style.marginTop = '10px';
        return;
    }
}

function validate_register_input() {
    if (comparePasswords()) {
        document.getElementById('login_form').submit();
    } else {
        register_error('pw');
    }
}

function enter_listener() {
    var form = document.getElementById('login_form');
    form.addEventListener("keydown", function (e) {
        if (e.keyCode == 13) {
            validate_register_input();
        }
    })
}
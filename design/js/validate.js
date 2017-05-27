function login_error() {
    var username = document.getElementById('input_username');
    var password = document.getElementById('input_password');
    var infobox = document.getElementById('login_error_notify');
    password.className += ' input_error';
    username.className += ' input_error';
    infobox.style.display = 'block';
}

function compare_passwords() {
    var pw1 = document.getElementById('input_password');
    var pw2 = document.getElementById('input_password_confirm');
    // true if they match and are not empty
    return (pw1.value == pw2.value && pw1.value != '' && pw2.value != '');
}

function check_username() {
    var username = document.getElementById('input_username').value
    var re = /^\w+$/;
    return re.test(username);
}

function check_email() {
    var email = document.getElementById('input_email').value;
    // taken from another project
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
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
    var passwordsMatch = compare_passwords();
    var usernameValid = check_username();
    var emailValid = check_email();
    if (emailValid && passwordsMatch && usernameValid) {
        document.getElementById('login_form').submit();
    } else if (!passwordsMatch) {
        register_error('pw');
    } else if (!emailValid) {
        register_error('email')
    } else if (!usernameValid) {
        register_error('user')
    }
}

function validate_post() {
    var message = document.getElementById('inputText').value;
    if (message.length > 0 && message.length <= 140) {
        document.getElementById('form_post').submit();
    } else if (message.length > 140) {
        alert(message.length + '/140 -> zu lang!');
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
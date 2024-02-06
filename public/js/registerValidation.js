    let form = document.querySelector('form');
    let username = document.getElementById('name');
    let email = document.getElementById('email');
    let password = document.getElementById('password');
    let confpassword = document.getElementById('cpassword');

    form.addEventListener('submit', e => {
        e.preventDefault();

        if (validateInputs()) {
            form.submit();
        }
    });


    const setError = (element, message) => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector('.error');

        errorDisplay.innerText = message;
        inputControl.classList.add('error');
        inputControl.classList.remove('success');
    }

    const setSuccess = element => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector('.error');

        errorDisplay.innerText = '';
        inputControl.classList.add('success');
        inputControl.classList.remove('error');
    };

    const isValidEmail = email => {
        const re =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    const validateInputs = () => {
        const usernameValue = username.value.trim();
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
        const confirmPasswordValue = confpassword.value.trim();

        if (usernameValue === '') {
            setError(username, 'Username is required');
        } else {
            setSuccess(username);
        }

        if (emailValue === '') {
            setError(email, 'Email is required');
        } else if (!isValidEmail(emailValue)) {
            setError(email, 'Provide a valid email address');
        } else {
            setSuccess(email);
        }

        if (passwordValue === '') {
            setError(password, 'Password is required');
        } else {
            setSuccess(password);
        }

        if (confirmPasswordValue === '') {
            setError(confpassword, 'Please confirm your password');
        } else if (confirmPasswordValue !== passwordValue) {
            setError(confpassword, "Password doesn't match");
        } else {
            setSuccess(confpassword);
        }

        return (
            username.parentElement.classList.contains('success') &&
            email.parentElement.classList.contains('success') &&
            password.parentElement.classList.contains('success') &&
            confpassword.parentElement.classList.contains('success')
        );
    };

    function changeStyleUser() {
        var usernameInput = document.getElementById('name');
        usernameInput.classList.add('clicked-style');
    }
    function onKeyUpUser(){
        var usernameInput = document.getElementById('name');
        usernameInput.classList.add('clicked-style');
    }
    
    function changeStyleEmail() {
        var emailInput = document.getElementById('email');
        emailInput.classList.add('clicked-style');
    }
    function onKeyUpEmail(){
        var emailInput = document.getElementById('email');
        emailInput.classList.add('clicked-style');
    }

    function changeStylePassword() {
        var passwordInput = document.getElementById('password');
        passwordInput.classList.add('clicked-style');
    }
    function onKeyUpPassword(){
        var passwordInput = document.getElementById('password');
        passwordInput.classList.add('clicked-style');
    }

    function changeStyleCpassword() {
        var cpasswordInput = document.getElementById('cpassword');
        cpasswordInput.classList.add('clicked-style');
    }
    function onKeyUpCpassword(){
        var cpasswordInput = document.getElementById('cpassword');
        cpasswordInput.classList.add('clicked-style');
    }

    //showw Password 
    let eyeIcon = document.getElementById('eye-icon');
    eyeIcon.onclick = function() {
        if (password.type == "password") {
            password.type = "text";
            eyeIcon.src = "images/eye-open.png"
        } else {
            password.type = "password";
            eyeIcon.src = "images/closed-eye.png"
        }
    }
    let eyeIconConf = document.getElementById('eye-icon-conf');
    eyeIconConf.onclick = function() {
        if (confpassword.type == "password") {
            confpassword.type = "text";
            eyeIconConf.src = "images/eye-open.png"
        } else {
            confpassword.type = "password";
            eyeIconConf.src = "images/closed-eye.png"
        }
    }
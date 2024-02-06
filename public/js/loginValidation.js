// For Empty Fields
let form = document.querySelector('form');
let email = document.getElementById('email')
let password = document.getElementById('password')

form.addEventListener('submit', e => {
    // Remove preventDefault here to allow form submission
    e.preventDefault();

    // Validate inputs
    if (validateInputs()) {
        console.log(validateInputs())
        // If validation passes, submit the form
        form.submit();
    }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};


const validateInputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if (emailValue === '') {
        setError(email, 'Email is required');
    } else {
        setSuccess(email);
    }

    if (passwordValue === '') {
        setError(password, 'Password is required');
    } else {
        setSuccess(password);
    }


    return (
        email.parentElement.classList.contains('success') &&
        password.parentElement.classList.contains('success')
    );
};

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

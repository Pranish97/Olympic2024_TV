<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="css/register.css">
    <title>Login To Olympic TV</title>
</head>


<body>
    <div class='signup-box'>
        <div class="signup-form">
            <form action="{{ route('registerUser') }}" enctype="multipart/form-data" method="post">
                @csrf
                <p class="register">Register To FunOlympic TV</p>
                <div class="mb-2">
                    <label class="usernameText">Full Name </label>
                    <input type="text" id="name" class="username" name="name" onclick="changeStyleUser()"
                        onkeyup="onKeyUpUser()" />
                    <div class="error"></div>
                </div>

                <div class="mb-2">
                    <label class="emailText">Email address </label>
                    <input type="email" class="email" id="email" name="email" onclick="changeStyleEmail()"
                        onkeyup="onKeyUpEmail()">
                    <div class="error"></div>
                </div>

                <div class="mb-2">
                    <label class="countryText">Country</label>
                    <select name="country" class="country" id="country">
                        <option value="">Select a country</option>
                        <option value="USA">United States</option>
                        <option value="UK">United Kingdom</option>
                        <option value="Canada">Canada</option>
                        <option value="Nepal">Nepal</option>
                        <option value="China">China</option>
                        <option value="India">India</option>
                        <option value="Japan">Japan</option>
                        <option value="France">France</option>
                        <option value="Italy">Italy</option>
                        <option value="Russia">Russia</option>
                    </select>
                    <div class="error"></div>

                </div>
                <div class="mb-2">
                    <label class="phoneText">Phone Number </label>
                    <input type="text" class="phone_number" id="phone_number" name="phone_number"
                        onclick="changeStylePhone()" onkeyup="onKeyUpPhone()">
                    <div class="error"></div>
                </div>
                <div class="mb-2" style="position: relative; width: 400px; height: 70px;">
                    <label class="passwordText">Password</label>
                    <input type="password" name="password" class="password" id="password"
                        onclick="changeStylePassword()" onkeyup="onKeyUpPassword()">
                    <img src="images/closed-eye.png"
                        style="width: 35px; cursor:pointer; position: absolute; margin-left:370px; top: 51%; transform: translateY(-50%);"
                        id="eye-icon">
                    <div class="error"></div>
                </div>

                <div class="mb-2" style="position: relative; width: 400px; height: 70px;">
                    <label class="cpasswordText">Confirm Password </label>
                    <input type="password" class="cpassword" id="cpassword" name="password_confirmation"
                        onclick="changeStyleCpassword()" onkeyup="onKeyUpCpassword()">
                    <div class="error"></div>
                    <img src="images/closed-eye.png"
                        style="width: 35px; cursor:pointer; position: absolute; margin-left:370px; top: 51%; transform: translateY(-50%);"
                        id="eye-icon-conf">
                </div>
                <button type="submit" class="registerButton">Register</button>
                <p class="already">Alerady Have Account? <a href="/login" class="loginLink">Login</a>
            </form>
        </div>
    </div>
    <script src="js/registerValidation.js"></script>
    @if(Session::has('success'))
    <script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
    }
    toastr.success("{{ session('success') }}")
    </script>
    @endif


    @if(Session::has('email'))
    <script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
    }
    toastr.error("{{ session('email') }}")
    </script>
    @endif
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="css/login.css">
    <title>Login To Olympic TV</title>
</head>

<body>
    <div class="login-box">
        <div class="login-form">
            <form action="{{ route('loginUser') }}" enctype="multipart/form-data" method="post"">
            @csrf
            <p class=" login">Login To Olympic TV</p>
                <p class="welcome">Welcome Back</p>
                <div class=" mb-3" ">
            <label class=" emailTitle">Email address</label>
                    <input type="email" class="email" id="email" name="email" onclick="changeStyleEmail()" onkeyup="onKeyUpEmail()">
                    <div class="error">
                    </div>
                </div>
                <div class="mb-3" style="position: relative;">
                    <label class="passwordTitle">Password </label>
                    <input type="password" class="password" name="password" id="password" onclick="changeStylePassword()" onkeyup="onKeyUpPassword()">
                    <div class=" error">
                    </div>
                    <img src="images/closed-eye.png" style="width: 35px; cursor:pointer; position: absolute; margin-left:370px; top: 65%; transform: translateY(-50%);" id="eye-icon">
                </div>
                <div class="mb-3 form-check" style="margin-left: 10px;">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="remember" for="exampleCheck1">Remember Me</label>
                    <a href="/forget-password" class="forget">Forget
                        Password ?</a>
                </div>


                <button type="submit" class="loginButton">
                    Login</button>
                <p class="account">Don't have Account? <a href="/register" class="registerLink">Register</a>

                </p>
            </form>
        </div>
    </div>

    <script src="js/loginValidation.js"></script>
    @if(Session::has('success'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
        }
        toastr.success("{{ session('success') }}")
    </script>
    @endif


    @if(Session::has('error'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
        }
        toastr.error("{{ session('error') }}")
    </script>
    @endif

    @if(Session::has('logout'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
        }
        toastr.success("{{ session('logout') }}")
    </script>
    @endif



</body>

</html>
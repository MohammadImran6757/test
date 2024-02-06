<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main-container">
        <div class="page-title">Choose Account Type</div>
        <div class="acc-type-div">
            <div class="acc-div"><img src="img/buyer.jpg" alt=""><span>Buyer</span></div>
            <div class="acc-div"><img src="img/seller.png" alt=""><span>Seller</span></div>
        </div>
        <div class="greet-msg-div">
            <span class="msg-1">Hello Buyer!</span>

            <span class="msg-2">Please fill out the form below to get started</span>
        </div>

        <div class="login-container">
            <div class="login-input-container">
                <div class="login-input-div">
                    <span class="login-input-img"><img src="img/email.svg" alt=""></span><input class="login-input" type="text" placeholder="">
                    <label class="login-label">Email</label>
                </div>

            </div>
            <div class="login-input-container">
                <div class="login-input-div">
                    <span class="login-input-img"><img src="img/lock.svg" alt=""></span><input class="login-input" type="text" placeholder="">
                    <label class="login-label">Password </label>
                    <span class="forgot-span"><a href="forgotpassword.php">Forgot?</a></span>
                </div>

            </div>
        </div>
        <div class="signup-div-spc">
            <p class="left">No account ? <a href="signup.php">Signup</a></p>
            <div class="btn"><a href="#">Login</a></div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/style.css">
    <title>Authentification</title>
</head>
<body>
    
<section class="forms-section">
    <h1 class="section-title">Animated Forms</h1>
    <div class="forms">
        <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
                Login
                <span class="underline"></span>
            </button>
            <!-- *************************************************************************************** -->
            <form class="form form-login"  action="../Authentif/LoginBE.php" method="POST">
                <fieldset>
                    <legend>Please, enter your email and password for login.</legend>
                    <div class="input-block">
                        <label for="email">E-mail</label>
                        <input id="login-email" name="email" type="email" required>
                    </div>
                    <div class="input-block">
                        <label for="password">Password</label>
                        <input id="login-password" name="password" type="password" required>
                    </div>
                </fieldset>
                <button type="submit" name="submit" class="btn-login">Login</button>
            </form>
        </div>
        <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
                Sign Up
                <span class="underline"></span>
            </button>
<!-- *********************************************************************************************** -->
            <form class="form form-signup" action="../Authentif/SignupBE.php" method="POST">
                <fieldset>
                    <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                    <div class="input-block">
                        <label for="signup-username">Username</label>
                        <input id="signup-username" name="username" type="text" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-email">E-mail</label>
                        <input id="signup-email" name="email" type="email" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password">Password</label>
                        <input id="signup-password" name="password" type="password" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password-confirm">Confirm password</label>
                        <input id="signup-password-confirm" name="confirm_Password" type="password" required>
                    </div>
                </fieldset>
                <button type="submit" name="submit" class="btn-signup">Continue</button>
            </form>
        </div>
    </div>
</section>
<script>
    const switchers = [...document.querySelectorAll('.switcher')]

    switchers.forEach(item => {
        item.addEventListener('click', function() {
            switchers.forEach(item => item.parentElement.classList.remove('is-active'))
            this.parentElement.classList.add('is-active')
        })
    })
</script>
</body>
</html>

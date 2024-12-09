
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/desktop-main-menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/main-header.css">
    <link rel="stylesheet" href="css/section-img.css">
    <link rel="stylesheet" href="css/section.css">
    <link rel="stylesheet" href="css/trail.css">
    <link rel="stylesheet" href="css/wrapper.css">
    <title>Login</title>
</head>
<body class="back">
    <header class="main-header">
        <div class="logo">
            <a href="index.html">
                <img src="img/logo.png" alt="Reliquary">
            </a>
        </div>
        
    </header>

    <section id="login">
        <div>
            <div class="wrapper">
                <div class="form-box login">
                    <h2>Login</h2>
                    <form id="login-form" action="login.php" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                            <input id="login-email" name="email" type="email" required>
                            <label for="login-email">Email</label>
                            <div class="error"></div>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                            <input id="login-password" name="password" type="password" required>
                            <label for="login-password">Password</label>
                            <div class="error"></div>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">Remember me</label>
                            <a href="#">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn2">Login</button>
                        <div class="login-register">
                            <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>
    
                <div class="form-box register">
                    <h2>Registration</h2>
                    <form id="register-form" action="../controllers/routing.php?action=register" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <input id="username" name="username" type="text" required>
                            <label for="username">Username</label>
                            <div class="error"></div>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                            <input id="register-email" name="email" type="email" required>
                            <label for="register-email">Email</label>
                            <div class="error"></div>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                            <input id="register-password" name="password" type="password" required>
                            <label for="register-password">Password</label>
                            <div class="error"></div>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">I agree to the terms & conditions</label>
                        </div>
                        <button type="submit" class="btn2">Register</button>
                        <div class="login-register">
                            <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                        </div>
                    </form>
                </div>
    
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>
    <script src="js/trail.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script defer src="js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

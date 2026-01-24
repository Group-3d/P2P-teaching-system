<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./style.css" type="text/css" rel="stylesheet" />
    <link href="./styles/auth.css" type="text/css" rel="stylesheet" />
    <script src="./script.js" type="module" defer></script>
  </head>
  <body>
    
    <main class="login-page">
        <div class="login-form-wrapper">
            <div class="login-form-header">
                <h1>Login</h1>
                <span>Input your Login Information to Continue</span>
            </div>
            <form id="login_form" class="login-form" action="./functions/login_submit.php" method="post">
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />

                <button type="submit">Login</button>
            </form>

            <a href="/register.php">
                Don't Have an Account? <span class="colored">Register</span>
            </a>
      </div>
    </main>
    
  </body>
</html>

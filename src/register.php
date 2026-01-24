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
    
    <main class="register-page">
        <div class="register-form-wrapper">
            <div class="register-form-header">
                <h1>Register</h1>
                <span>Input your Correct details to Register</span>
            </div>
            <form id="register_form" class="register-form" action="./functions/register_submit.php" method="post">
                <input type="text" name="name" placeholder="Username" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="password" name="confirm" placeholder="Confirm Password" required />

                <button type="submit">Register</button>
            </form>

            <a href="/login.php">
                Already Have an Account? <span class="colored">Login</span>
            </a>
      </div>
    </main>
    
  </body>
</html>

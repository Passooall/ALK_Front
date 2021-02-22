<html lang="en">
    <head>
        <title>A-LK Reset Password</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="keyword" content="alk, anti-lockout, kit, anti, lockout, car, vehicle, lock, key, facial, recognition">
        <meta name="description" content="The home page of the Anti-Lockout Kit web app">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    </head>
  
    <body class="text-center" style="background-color: #196fc8;">
        <div class="box" >
            <form class="form-signin">
                <img class="mb-4 logo" src="../Images/ALK_Logo.png" alt="">
                <h1 style="margin-bottom:30">Anti-Lockout Kit</h1>
                <text>Please enter new password</text>
                <label for="newPassword" class="sr-only">
                    New Password
                </label>
                <input type="password" id="newPassword" class="form-control" style="margin-bottom:20" placeholder="New Password" required="">
                <label for="rePassword" class="sr-only">
                    Re Password
                </label>
                <input type="password" id="rePassword" class="form-control" style="margin-bottom:20" placeholder="Re-Enter Password" required="">
                <button formaction="signIn.html" class="btn btn-lg btn-primary btn-block" type="submit">
                    Reset Password
                </button>
                <div style="margin-top: 20px";>
                    <text>
                        Already have an account?
                    </text>
                    <a href="login.php"  type="submit">
                        Login
                    </a>
                    <br>
                    <text>
                        Create a new account?
                    </text>
                    <a href="signUp.php"  type="submit">
                        signUp
                    </a>
                </div>
            </form>
            <div id="shimai-world" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 2147483647; pointer-events: none; background: transparent;"></div>
        </div>
    </body>

  </html>
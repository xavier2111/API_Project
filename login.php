<!DOCTYPE html>
<html>
<head>
    <title>The Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<include src="sidenav.html"></include>
  <div class="wrap">
        <form class="login-form" method="post" action="functions/login_functions.php">
            <div class="form-header">
                <h3>Login Form</h3>
                <p>Login om de database aan te passen</p>
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="text" class="form-input" name="username" id="username" placeholder="Username" required="required">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" class="form-input" name="password" id="password" placeholder="password" required="required">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" type="submit" value="Submit" name="login_submit" id="login_submit">Login</button>
            </div>
            <div class="form-footer">
            Geen account? <a href="signup.php">Maak een account aan!</a>
            </div>
        </form>
    </div><!--/.wrap-->
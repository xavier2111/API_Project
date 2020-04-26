<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		<div id="sidebar"></div>
		<div class="wrap">
			<form class="login-form" onsubmit="return checkData()" method="post" action="functions/login_functions.php">
				<div class="form-header">
					<h3>Registreren</h3>
                	<p>Registreer om een gebruiker aan te maken</p>
				</div>
				<div class="form-group">
			    	<input type="text" class="form-input" name="username" id="username" placeholder="Username" required="required">
				</div>
				<div class="form-group">
			    	<input type="password" class="form-input" name="password1" id="password1" placeholder="Password" value="" required="required">
				</div>
				<div class="form-group">
			    	<input type="password" class="form-input" name="password2" id="password2" placeholder="Password2" value="" required="required"> <br> <br>
			   	</div>
			   	<button class="form-button" type="submit" value="Send" name="signup_submit" id="signup_submit">Registreer</button>
			    <input type="submit" value="Send" id="signup_submit" name="signup_submit"/>
			</form>
		</div>
	</body>
</html>

<script>
//Check of passworden gelijk zijn.
	function checkData(){
		var username = document.getElementById('username').value;
		var password1 = document.getElementById('password1').value;
		var password2 = document.getElementById('password2').value;
	    if(password1!=password2){
	        alert('Given data is incorrect');
	        return false;
	    }
	    return true;
	}
</script>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
		<div id="sidebar"></div>

		<form onsubmit="return checkData()" method="post" action="functions/login_functions.php">
		    Username:<input type="text" name="username" id="username" value="" required="required"> <br> <br>
		    Password1:<input type="password" name="password1" id="password1" value="" required="required"> <br> <br>
		    Password2:<input type="password" name="password2" id="password2" value="" required="required"> <br> <br>
		    <input type="submit" value="Send" id="signup_submit" name="signup_submit"/>
		</form>

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
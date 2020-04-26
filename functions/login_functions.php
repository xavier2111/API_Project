<?php
	if(isset($_POST['login_submit'])){
		login();
	}

	if(isset($_POST['signup_submit'])){
		signUp();
	}
	if($_GET['mode'] == 'logout'){
		logout();
	}

//Checkt of de login gegevens kloppen en zet admin true of false
	function login(){
		include '../db_connect.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = :user");
        $stmt->bindparam("user", $username);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        foreach ($rows as $row) {
        	if(password_verify($password, $row['password']))
    		{	
    			session_start();
    			$_SESSION['admin'] = true;
        		echo header('Location: ../database.php');
    		} 
    		else 
    		{
    			$_SESSION['admin'] = false;
        		echo "Onjuiste gegevens!";
    		}	
        }
    }
//Logt de gebruiker uit
	function logout(){
		session_start();
		session_destroy();
		echo header('Location: ../index.php');
	}

//Maak een nieuwe gebruiker aan
	function signUp(){
		include '../db_connect.php';

		$username = $_POST["username"];
		$password = $_POST["password1"];
		$admin = true;
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$sql ="SELECT username FROM users WHERE username='$username'";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':username', $username);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if($row['username'] == $username)
		{
    		echo 'Gebruikersnaam bestaat al. Kies een andere.';
		} 
		else
		{
			$stmt = $conn->prepare("INSERT INTO users (username, password, admin) 
									VALUES (:username, :password, :admin)");
			$stmt->bindParam(':username', $username);
		    $stmt->bindParam(':password', $hashed_password);
		    $stmt->bindParam(':admin', $admin);
			 
			if ($stmt->execute())
	        {
					echo "<p>"."<strong>Gebruiker toegevoegd</strong>"."</p>";
			}			
			$conn = null;
			header("Location: ../login.php");
		}
	}

?>
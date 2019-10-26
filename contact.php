

<!DOCTYPE html>
<html>
<head>
<title>Stinergy</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<?php include('header.php'); ?>

<h2 id="myAcc">CONTACT US</h2>
<div id="myAccForm"></div>
	<br>

	<form action="" method="post">
		<input type="email" class="emailForm4" size="40" name="Email" placeholder="   EMAIL" required="required"><br>
		<input type="text" class="usernameForm3" size="40" name="Username" placeholder="   REQUESTS/COMMENTS" required="required"><br>
		<input type="submit" id="newAccButton3" value="SEND" name="newAccButton"/>
	</form>

<div class="nonUserFooter">
	<form action="" method="post">
	<button type="submit" id="satListBut2" name="satListButton">
		<img src="/resources/sat.png" alt="SATLIST">
	</button>
	</form>
	<form action="" method="post">
		<button type="submit" id="gameButton2" name="gameButton">
			<img src="/resources/globe.png" alt="GAME">
		</button>
	</form>
</div>

<?php
if(isset($_POST["satListButton"])){
	header('Location: /satellites.php');
}
if(isset($_POST["logoutButton"])){
	echo test;
	$result = mysqli_query($conn,'DELETE FROM sessions WHERE userID="'.$id.'"');
	setcookie("seshID", "", time() - 3600); 
	header('Location: /');
	exit;
}
if(isset($_POST["gameButton"])){
	header('Location: /index.php');
}
if(isset($_POST["newAccButton"])){
	$query = mysqli_query($conn,'SELECT * FROM users WHERE email="'.$_POST["Email"].'"');
	if(mysqli_num_rows($query) > 0){
		echo "That email is already signed up!";
	}else{
	$sql = "INSERT INTO users (email,username,password)
	VALUES ('".$_POST["Email"]."','".$_POST["Username"]."','".$_POST["Password"]."')";
	      if (mysqli_query($conn, $sql)) {
 	        echo "New user created successfully<br>";
		header('Location: index.php');
 	     }
	}
}
mysqli_close($conn);
?>
</body>
</html>
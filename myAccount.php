

<!DOCTYPE html>
<html>
<head>
<title>Stinergy</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>

<?php include('header.php'); ?>

<h2 id="myAcc">MY ACCOUNT</h2>
<div id="myAccForm"></div>
	<br>

	<form action="" method="post">
		<input type="email" class="emailForm3" size="40" name="Email" placeholder="   EMAIL" required="required"><br>
		<input type="text" class="usernameForm2" size="40" name="Username" placeholder="   DISPLAY NAME" required="required"><br>
		<input type="password" id="passwordForm4" size="40" name="Password" placeholder="   NEW PASSWORD" required="required"><br>
		<input type="password" id="passwordForm5" size="40" name="ConfirmPassword" placeholder="   CONFIRM NEW PASSWORD" required="required"><br>
		<input type="password" id="passwordForm6" size="40" name="ConfirmPassword" placeholder="   CURRENT PASSWORD" required="required"><br>
		<input type="submit" id="newAccButton2" value="UPDATE" name="newAccButton"/>
	</form>
	<form action="" method="post">
		<input type="submit" id="logoutButton" value="LOG OUT" name="logoutButton"/>
	</form> 
<h3 id="satSeen">
SATELLITES SEEN: 0
</h3>
<h3 id="checkins">
TOTAL CHECK INS: 0
</h3>
<h3 id="totalPoints">
TOTAL POINTS: 0
</h3>
<h3 id="totalProps">
TOTAL PROPS: 0
</h3>
<div class="memberFooter">
	<form action="" method="post">
	<button type="submit" id="satListButton" name="satListButton">
		<img src="/resources/sat.png" alt="SATLIST">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="gameButton" name="gameButton">
		<img src="/resources/globe.png" alt="GAME">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="leaderBoardButton" name="leaderBoardButton">
		<img src="/resources/trophy.png" alt="LEADERS">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="contactUsButton" name="contactUsButton">
		<img src="/resources/contact.png" alt="CONTACT">
	</button>
	</form>
</div>
<?php
if(isset($_POST["leaderBoardButton"])){
	header('Location: /leaderboard.php');
}
if(isset($_POST["satListButton"])){
	header('Location: /satellites.php');
}
if(isset($_POST["contactUsButton"])){
	header('Location: /contact.php');
}
if(isset($_POST["logoutButton"])){
	echo test;
	$result = mysqli_query($conn,'DELETE FROM sessions WHERE userID="'.$id.'"');
	setcookie("seshID", "", time() - 3600); 
	header('Location: /');
	exit;
}
if(isset($_POST["gameButton"])){
	header('Location: /members.php');
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
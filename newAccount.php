

<!DOCTYPE html>
<html>
<head>
<title>Stinergy</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<?php include('header.php'); ?>

<h2 id="newAccLabel">CREATE AN<br>ACCOUNT</h2>
<div id="newAcc"></div>
	<br>
	<form action="" method="post">
		<input type="email" class="emailForm2" size="40" name="Email" placeholder="   EMAIL" required="required"><br>
		<input type="text" class="usernameForm" size="40" name="Username" placeholder="   DISPLAY NAME" required="required"><br>
		<input type="password" id="passwordForm2" size="40" name="Password" placeholder="   PASSWORD" required="required"><br>
		<input type="password" id="passwordForm3" size="40" name="ConfirmPassword" placeholder="   CONFIRM PASSWORD" required="required"><br>
		<input type="submit" id="newAccButton" value="SUBMIT" name="newAccButton"/>
	</form>    


<?php
if(isset($_POST["contactUsBut"])){
	header('Location: /contact.php');
}
if(isset($_POST["newAccButton"])){
if($_POST["Password"]==$_POST["ConfirmPassword"]){
	$query = mysqli_query($conn,'SELECT * FROM users WHERE email="'.$_POST["Email"].'"');
	if(mysqli_num_rows($query) > 0){
		echo "<p id='errorHandle'>THIS EMAIL IS ALREADY SIGNED UP</p>";
	}else{
	$sql = "INSERT INTO users (email,username,password)
	VALUES ('".$_POST["Email"]."','".$_POST["Username"]."','".$_POST["Password"]."')";
	      if (mysqli_query($conn, $sql)) {
 	        echo "New user created successfully<br>";
		header('Location: index.php');
 	     }
	}
}else{
	echo "<p id='errorHandle'>PASSWORDS DID NOT MATCH</p>";
}
}
?>
<div class="nonUserFooter">
	<form action="" method="post">
	<button type="submit" id="satListBut2" name="satListButton">
		<img src="/resources/sat.png" alt="SATLIST">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="contactUsBut" name="contactUsBut">
		<img src="/resources/contact.png" alt="CONTACT">
	</button>
	</form>
</div>
<?php
if(isset($_POST["satListButton"])){
	header('Location: /satellites.php');
}
mysqli_close($conn);
?>
</body>
</html>
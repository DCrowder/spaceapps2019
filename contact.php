

<!DOCTYPE html>
<html>
<head>
<title>Stinergy</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<?php include('header.php'); 
$key = $_COOKIE["seshID"];
$result = mysqli_query($conn,'SELECT userID FROM sessions WHERE seshID="'.$key.'"');
if($row = mysqli_fetch_assoc($result)){
	$id=$row["userID"];
	$result = mysqli_query($conn,'SELECT firstName FROM users WHERE id="'.$id.'"');
	while($row = mysqli_fetch_assoc($result)){
		echo "<br>".$row["firstName"];
	}
}else{
	echo "<br>invalid session key";
	$tmp='';
	if(isset($_GET["sat"])){$tmp= "?sat=".$_GET["sat"];}
	header('Location: index.php'.$tmp);
}?>

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
if(isset($_POST["gameButton"])){
	header('Location: /index.php');
}
if(isset($_POST["newAccButton"])){
	$sql="INSERT INTO feedback(userID,email,content) VALUES ('".$id."','".$_POST["Email"]."','".$_POST["Username"]."')";
	if(mysqli_query($conn,$sql)===TRUE){
		echo "<p>WE APPRECIATE THE FEEDBACK AND WILL RESPOND ASAP!</p>";
	}else{
		echo "<p>SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>";
	}
}
mysqli_close($conn);
?>
</body>
</html>
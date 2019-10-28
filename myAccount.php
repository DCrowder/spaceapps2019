

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
	$result = mysqli_query($conn,'SELECT username FROM users WHERE userID="'.$id.'"');
	while($row = mysqli_fetch_assoc($result)){
		$name = $row["username"];
	}
}else{
	echo "<br>invalid session key";
	$tmp='';
	if(isset($_GET["sat"])){$tmp= "?sat=".$_GET["sat"];}
	header('Location: index.php'.$tmp);
}
 ?>

<h2 id="myAcc2"><?php echo $name; ?></h2>
<div id="myAccForm4"></div>
	<br>

	<form action="" method="post">
		
		<input type="text" class="usernameForm2" size="40" name="Username" placeholder="   DISPLAY NAME" required="required"><br>
		<input type="password" id="passwordForm4" size="40" name="Password" placeholder="   NEW PASSWORD" required="required"><br>
		<input type="password" id="passwordForm5" size="40" name="ConfirmPassword" placeholder="   CONFIRM NEW PASSWORD" required="required"><br>
		<input type="password" id="passwordForm6" size="40" name="oldPassword" placeholder="   CURRENT PASSWORD" required="required"><br>
		<input type="submit" id="newAccButton2" value="UPDATE" name="newAccButton"/>
	</form>
	<form action="" method="post">
		<input type="submit" id="logoutButton" value="LOG OUT" name="logoutButton"/>
	</form> 
	
<?php
	$result = mysqli_query($conn,'SELECT SUM(points) as sum FROM checkins WHERE userID="'.$id.'"');
	if (mysqli_num_rows($result) ==1) {
		while($row = mysqli_fetch_assoc($result)){
			$sum= $row["sum"];
		}
	}
	$result = mysqli_query($conn,'SELECT COUNT(checkID) as checkins FROM checkins WHERE userID="'.$id.'"');
	if (mysqli_num_rows($result) ==1) {
		while($row = mysqli_fetch_assoc($result)){
			$checkins = $row["checkins"];
		}
	}
	$result = mysqli_query($conn,'SELECT COUNT(DISTINCT(satID)) as satellites FROM checkins WHERE userID="'.$id.'"');
	if (mysqli_num_rows($result) ==1) {
		while($row = mysqli_fetch_assoc($result)){
			$satellites = $row["satellites"];
		}
	}
	$result = mysqli_query($conn,'SELECT COUNT(propID) as props FROM props WHERE toID="'.$id.'"');
	if (mysqli_num_rows($result) ==1) {
		while($row = mysqli_fetch_assoc($result)){
			$props = $row["props"];
		}
	}


?>
	
<h3 id="satSeen">
SATELLITES SEEN: <?php echo $satellites;?>
</h3>
<h3 id="checkins">
TOTAL CHECK INS: <?php echo $checkins;?>
</h3>
<h3 id="totalPoints">
TOTAL POINTS: <?php echo $sum;?>
</h3>
<h3 id="totalProps">
TOTAL PROPS: <?php echo $props;?>
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
	header('Location: index.php');
}
if(isset($_POST["newAccButton"])){
	if($_POST["ConfirmPassword"]==$_POST["Password"]){
		$result = mysqli_query($conn,'SELECT password FROM users WHERE userID="'.$id.'"');
		if (mysqli_num_rows($result) ==1) {
			while($row = mysqli_fetch_assoc($result)){
				if($row["password"]==$_POST["oldPassword"]){
					$sql="UPDATE users SET username='".$_POST["Username"]."', password='".$_POST["Password"]."' WHERE userID='".$id."'";
					if(mysqli_query($conn,$sql)===TRUE){
						echo "<p>ACCOUNT SUCCESSFULLY UPDATED!</p>";
					}else{
						echo "<p>USERNAME ALREADY TAKEN</p>";
					}
				}else{echo "<p>INCORRECT PASSWORD</p>";}	
			}
		} else {
				echo "<p>USER NOT FOUND</p>";
		}
	}else{
		echo "<p>PASSWORDS DIDN'T MATCH</p>";
	}
}
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
mysqli_close($conn);
?>
</body>
</html>
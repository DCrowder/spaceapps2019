

<!DOCTYPE html>
<html>
<head>
<title>Stinergy</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<?php include('header.php'); 
if(isset($_POST["satListButton"])){
	header('Location: /satellites.php');
}
if(isset($_POST["contactUsButton"])){
	header('Location: /contact.php');
}
if(isset($_POST["myAccount"])){
	header('Location: /myAccount.php');
}
if(isset($_POST["gameButton"])){
	header('Location: /members.php');
}
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
$result = mysqli_query($conn,'SELECT satName, currentOwner FROM sats');
if (mysqli_num_rows($result) >0) {
	while($row = mysqli_fetch_assoc($result)){
		$sum= $row["sum"];
	}
}
?>

<h2 id="myAcc2">LEADERBOARDS</h2>
<div id="myAccForm2" style="overflow:scroll;">
	<div id="lead1">
		<h2 id="sat1abbrev">
		DeltaOrion7
		</h2>
		<h4 id="sat1norad">
		OWNS VANGUARD 1
		</h4>
		<h4 id="sat1name">
		FOR 6 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props1Button"/>
		</form> 
	</div>
	<div id="lead2">
		<h2 id="sat1abbrev">
		VortexKing
		</h2>
		<h4 id="sat1norad">
		OWNS STARLINK OBJ BM
		</h4>
		<h4 id="sat1name">
		FOR 4 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props2Button"/>
		</form> 
	</div>
	<div id="lead3">
		<h2 id="sat1abbrev">
		CassieCassiopeia
		</h2>
		<h4 id="sat1norad">
		OWNS IRIDIUM 167
		</h4>
		<h4 id="sat1name">
		FOR 4 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props3Button"/>
		</form> 
	</div>
	<div id="lead4">
		<h2 id="sat1abbrev">
		StarLord98
		</h2>
		<h4 id="sat1norad">
		OWNS PRISMA
		</h4>
		<h4 id="sat1name">
		FOR 3 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props4Button"/>
		</form> 
	</div>
	<div id="lead5">
		<h2 id="sat1abbrev">
		GalaxyGirl
		</h2>
		<h4 id="sat1norad">
		OWNS FIREBIRD 4
		</h4>
		<h4 id="sat1name">
		FOR 2 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props5Button"/>
		</form> 
	</div>
</div>
<div id="myAccForm3" style="overflow:scroll;">
	<div id="lead1">
		<h2 id="sat1abbrev">
		JonSnow
		</h2>
		<h4 id="sat1norad">
		CHECK INS: 51
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS: 2358
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props6Button"/>
		</form> 
	</div>
	<div id="lead2">
		<h2 id="sat1abbrev">
		GammaMamma
		</h2>
		<h4 id="sat1norad">
		CHECK INS: 42
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS: 2048
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props7Button"/>
		</form> 
	</div>
	<div id="lead3">
		<h2 id="sat1abbrev">
		AndyAndromeda
		</h2>
		<h4 id="sat1norad">
		CHECK INS: 36
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS: 1849
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props8Button"/>
		</form> 
	</div>
	<div id="lead4">
		<h2 id="sat1abbrev">
		Nebula15
		</h2>
		<h4 id="sat1norad">
		CHECK INS: 29
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS: 1608
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props9Button"/>
		</form> 
	</div>
	<div id="lead5">
		<h2 id="sat1abbrev">
		EpsilonElliot
		</h2>
		<h4 id="sat1norad">
		CHECK INS: 25
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS: 1492
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props10Button"/>
		</form> 
	</div>
</div>

<div class="memberFooter">
	<form action="" method="post">
	<button type="submit" id="satListButton" name="satListButton">
		<img src="/resources/sat.png" alt="SATLIST">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="gameButton" name="myAccount">
		<img src="/resources/myAcc.png" alt="GAME">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="leaderBoardButton" name="gameButton">
		<img src="/resources/globe.png" alt="LEADERS">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="contactUsButton" name="contactUsButton">
		<img src="/resources/contact.png" alt="CONTACT">
	</button>
	</form>
</div>

<?php

mysqli_close($conn);
?>
</body>
</html>
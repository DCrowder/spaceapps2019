

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
?>

<h2 id="myAcc">LEADERBOARDS</h2>
<div id="myAccForm2" style="overflow:scroll;">
	<div id="lead1">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		OWNS
		</h4>
		<h4 id="sat1name">
		FOR 3 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props1Button"/>
		</form> 
	</div>
	<div id="lead2">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		OWNS 
		</h4>
		<h4 id="sat1name">
		FOR 3 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props2Button"/>
		</form> 
	</div>
	<div id="lead3">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		OWNS 
		</h4>
		<h4 id="sat1name">
		FOR 3 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props3Button"/>
		</form> 
	</div>
	<div id="lead4">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		OWNS 
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
		USERNAME
		</h2>
		<h4 id="sat1norad">
		OWNS 
		</h4>
		<h4 id="sat1name">
		FOR 3 DAYS
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props5Button"/>
		</form> 
	</div>
</div>
<div id="myAccForm3" style="overflow:scroll;">
	<div id="lead1">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		CHECK INS:
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS:
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props6Button"/>
		</form> 
	</div>
	<div id="lead2">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		CHECK INS:
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS:
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props7Button"/>
		</form> 
	</div>
	<div id="lead3">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		CHECK INS:
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS:
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props8Button"/>
		</form> 
	</div>
	<div id="lead4">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		CHECK INS:
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS:
		</h4>
		<form action="" method="post">
			<input type="submit" id="moreButton" value="PROPS" name="props9Button"/>
		</form> 
	</div>
	<div id="lead5">
		<h2 id="sat1abbrev">
		USERNAME
		</h2>
		<h4 id="sat1norad">
		CHECK INS:
		</h4>
		<h4 id="sat1name">
		TOTAL POINTS:
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
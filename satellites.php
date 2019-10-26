

<!DOCTYPE html>
<html>
<head>
<title>Stinergy</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<?php include('header.php'); ?>

<h2 id="myAcc">SATELLITES</h2>
<div id="myAccForm"></div>
	<br>
	
<div id="sat1">
	<h2 id="sat1abbrev">
	OCO-2
	</h2>
	<h4 id="sat1norad">
	NORAD: 40059
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2014-07-02
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="COMMENTS" name="more1Button"/>
	</form> 
</div>
<div id="sat2">
	<h2 id="sat1abbrev">
	VANGUARD 1
	</h2>
	<h4 id="sat1norad">
	NORAD: 5
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 1958-03-17
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="COMMENTS" name="more2Button"/>
	</form> 
</div>
<div id="sat3">
	<h2 id="sat1abbrev">
	SPACE STATION
	</h2>
	<h4 id="sat1norad">
	NORAD: 25544
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 1998-11-20
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="COMMENTS" name="more3Button"/>
	</form> 
</div>
<div id="sat4">
	<h2 id="sat1abbrev">
	FIREBIRD 4
	</h2>
	<h4 id="sat1norad">
	NORAD: 40378
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2015-01-31
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="COMMENTS" name="more4Button"/>
	</form> 
</div>
<div id="sat5">
	<h2 id="sat1abbrev">
	CRYOSAT 2
	</h2>
	<h4 id="sat1norad">
	NORAD: 36508
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2010-04-08
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="COMMENTS" name="more5Button"/>
	</form> 
</div>
<div id="sat6">
	<h2 id="sat1abbrev">
	POPACS 3
	</h2>
	<h4 id="sat1norad">
	NORAD: 39270
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2013-07-29
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="COMMENTS" name="more6Button"/>
	</form> 
</div>
<div class="nonUserFooter">
	<form action="" method="post">
		<button type="submit" id="satListBut2" name="gameButton2">
			<img src="/resources/contact.png" alt="SATLIST">
		</button>
	</form>
	<form action="" method="post">
		<button type="submit" id="gameButton2" name="gameButton">
			<img src="/resources/globe.png" alt="GAME">
		</button>
	</form>
</div>

<?php
if(isset($_POST["more1Button"])){
	header('Location: /satelliteDetails.php?sat=1');
}
if(isset($_POST["more2Button"])){
	header('Location: /satelliteDetails.php?sat=2');
}
if(isset($_POST["more3Button"])){
	header('Location: /satelliteDetails.php?sat=3');
}
if(isset($_POST["more4Button"])){
	header('Location: /satelliteDetails.php?sat=4');
}
if(isset($_POST["more5Button"])){
	header('Location: /satelliteDetails.php?sat=5');
}
if(isset($_POST["more6Button"])){
	header('Location: /satelliteDetails.php?sat=6');
}
if(isset($_POST["gameButton"])){
	header('Location: /index.php');
}
if(isset($_POST["gameButton2"])){
	header('Location: /contact.php');
}
mysqli_close($conn);
?>
</body>
</html>
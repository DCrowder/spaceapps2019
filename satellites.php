

<!DOCTYPE html>
<html>
<head>
<title>Stinergy</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<?php include('header.php'); 
if(isset($_POST["look1Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=1');
	}else{
		header('Location: /members.php?sat=1');
	}
}
if(isset($_POST["look2Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=2');
	}else{
		header('Location: /members.php?sat=2');
	}
}
if(isset($_POST["look3Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=3');
	}else{
		header('Location: /members.php?sat=3');
	}
}
if(isset($_POST["look4Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=4');
	}else{
		header('Location: /members.php?sat=4');
	}
}
if(isset($_POST["look5Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=5');
	}else{
		header('Location: /members.php?sat=5');
	}
}
if(isset($_POST["look6Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=6');
	}else{
		header('Location: /members.php?sat=6');
	}
}
if(isset($_POST["look7Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=7');
	}else{
		header('Location: /members.php?sat=7');
	}
}
if(isset($_POST["look8Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=8');
	}else{
		header('Location: /members.php?sat=8');
	}
}
if(isset($_POST["look9Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=9');
	}else{
		header('Location: /members.php?sat=9');
	}
}
if(isset($_POST["look10Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=10');
	}else{
		header('Location: /members.php?sat=10');
	}
}
if(isset($_POST["look11Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=11');
	}else{
		header('Location: /members.php?sat=11');
	}
}
if(isset($_POST["look12Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=12');
	}else{
		header('Location: /members.php?sat=12');
	}
}
if(isset($_POST["look13Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=13');
	}else{
		header('Location: /members.php?sat=13');
	}
}
if(isset($_POST["look14Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=14');
	}else{
		header('Location: /members.php?sat=14');
	}
}
if(isset($_POST["look15Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=15');
	}else{
		header('Location: /members.php?sat=15');
	}
}
if(isset($_POST["look16Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=16');
	}else{
		header('Location: /members.php?sat=16');
	}
}
if(isset($_POST["look17Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=17');
	}else{
		header('Location: /members.php?sat=17');
	}
}
if(isset($_POST["look18Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=18');
	}else{
		header('Location: /members.php?sat=18');
	}
}
if(isset($_POST["look19Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=19');
	}else{
		header('Location: /members.php?sat=19');
	}
}
if(isset($_POST["look20Button"])){
	if(!isset($_COOKIE["seshID"])){
		header('Location: /index.php?sat=20');
	}else{
		header('Location: /members.php?sat=20');
	}
}
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
if(isset($_POST["more7Button"])){
	header('Location: /satelliteDetails.php?sat=7');
}
if(isset($_POST["more8Button"])){
	header('Location: /satelliteDetails.php?sat=8');
}
if(isset($_POST["more9Button"])){
	header('Location: /satelliteDetails.php?sat=9');
}
if(isset($_POST["more10Button"])){
	header('Location: /satelliteDetails.php?sat=10');
}
if(isset($_POST["more11Button"])){
	header('Location: /satelliteDetails.php?sat=11');
}
if(isset($_POST["more12Button"])){
	header('Location: /satelliteDetails.php?sat=12');
}
if(isset($_POST["more13Button"])){
	header('Location: /satelliteDetails.php?sat=13');
}
if(isset($_POST["more14Button"])){
	header('Location: /satelliteDetails.php?sat=14');
}
if(isset($_POST["more15Button"])){
	header('Location: /satelliteDetails.php?sat=15');
}
if(isset($_POST["more16Button"])){
	header('Location: /satelliteDetails.php?sat=16');
}
if(isset($_POST["more17Button"])){
	header('Location: /satelliteDetails.php?sat=17');
}
if(isset($_POST["more18Button"])){
	header('Location: /satelliteDetails.php?sat=18');
}
if(isset($_POST["more19Button"])){
	header('Location: /satelliteDetails.php?sat=19');
}
if(isset($_POST["more20Button"])){
	header('Location: /satelliteDetails.php?sat=20');
}
if(isset($_POST["gameButton"])){
	header('Location: /index.php');
}
if(isset($_POST["gameButton2"])){
	header('Location: /contact.php');
}
?>

<h2 id="myAcc2">SATELLITES</h2>
<div id="myAccForm4" style="overflow:scroll;">
	
	
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
		<input type="submit" id="moreButton" value="VIEW" name="more1Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look1Button"/>
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
		<input type="submit" id="moreButton" value="VIEW" name="more2Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look2Button"/>
		
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
		<input type="submit" id="moreButton" value="VIEW" name="more3Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look3Button"/>
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
		<input type="submit" id="moreButton" value="VIEW" name="more4Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look4Button"/>
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
		<input type="submit" id="moreButton" value="VIEW" name="more5Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look5Button"/>
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
		<input type="submit" id="moreButton" value="VIEW" name="more6Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look6Button"/>
	</form> 
</div>
<div id="sat7">
	<h2 id="sat1abbrev">
	NOAA 16
	</h2>
	<h4 id="sat1norad">
	NORAD: 26536
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2000-09-21
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more7Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look7Button"/>
	</form> 
</div>
<div id="sat8">
	<h2 id="sat1abbrev">
	RAVAN
	</h2>
	<h4 id="sat1norad">
	NORAD: 41849
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2016-11-11
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more8Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look8Button"/>
	</form> 
</div>
<div id="sat9">
	<h2 id="sat1abbrev">
	PRISMA
	</h2>
	<h4 id="sat1norad">
	NORAD: 44072
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2019-03-22
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more9Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look9Button"/>
	</form> 
</div>
<div id="sat10">
	<h2 id="sat1abbrev">
	EUTE 65W
	</h2>
	<h4 id="sat1norad">
	NORAD: 41382
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2016-03-09
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more10Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look10Button"/>
	</form> 
</div>
<div id="sat11">
	<h2 id="sat1abbrev">
	STARLINK OBJ BM
	</h2>
	<h4 id="sat1norad">
	NORAD: 44294
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2019-05-24
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more11Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look11Button"/>
	</form> 
</div>
<div id="sat12">
	<h2 id="sat1abbrev">
	IRIDIUM 167
	</h2>
	<h4 id="sat1norad">
	NORAD: 43931
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2019-01-11
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more12Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look12Button"/>
	</form> 
</div>
<div id="sat13">
	<h2 id="sat1abbrev">
	GALILEO 17 (26D)
	</h2>
	<h4 id="sat1norad">
	NORAD: 41861
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2016-11-17
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more13Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look13Button"/>
	</form> 
</div>
<div id="sat14">
	<h2 id="sat1abbrev">
	METEOSAT 6
	</h2>
	<h4 id="sat1norad">
	NORAD: 22912
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 1993-11-20
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more14Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look14Button"/>
	</form> 
</div>
<div id="sat15">
	<h2 id="sat1abbrev">
	NIMBUS 6
	</h2>
	<h4 id="sat1norad">
	NORAD: 7924
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 1975-07-12
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more15Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look15Button"/>
	</form> 
</div>
<div id="sat16">
	<h2 id="sat1abbrev">
	DAMPE
	</h2>
	<h4 id="sat1norad">
	NORAD: 41173
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2015-12-17
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more16Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look16Button"/>
	</form> 
</div>
<div id="sat17">
	<h2 id="sat1abbrev">
	EGYPTSAT 2
	</h2>
	<h4 id="sat1norad">
	NORAD: 39678
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2014-04-16
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more17Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look17Button"/>
	</form> 
</div>
<div id="sat18">
	<h2 id="sat1abbrev">
	QUAKESAT
	</h2>
	<h4 id="sat1norad">
	NORAD: 27845
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2003-06-30
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more18Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look18Button"/>
	</form> 
</div>
<div id="sat19">
	<h2 id="sat1abbrev">
	AEROCUBE 4
	</h2>
	<h4 id="sat1norad">
	NORAD: 38769
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 2012-09-13
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more19Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look19Button"/>
	</form> 
</div>
<div id="sat20">
	<h2 id="sat1abbrev">
	NAVSTAR 35 (USA 96)
	</h2>
	<h4 id="sat1norad">
	NORAD: 22877
	</h4>
	<h4 id="sat1name">
	LAUNCH DATE: 1993-10-26
	</h4>
	<form action="" method="post">
		<input type="submit" id="moreButton" value="VIEW" name="more20Button"/>
		<input type="submit" id="lookButton" value="FIND" name="look20Button"/>
	</form> 
</div>
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
mysqli_close($conn);
?>
</body>
</html>
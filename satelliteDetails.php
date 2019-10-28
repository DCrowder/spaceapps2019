

<!DOCTYPE html>
<html>
<head>
<title>Stinergy</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<?php include('header.php'); 
switch (htmlspecialchars($_GET["sat"])) {
    case 1:
		$num=1;
        $name="OCO-2";
        break;
    case 2:
		$num=2;
        $name="VANGUARD 1";
        break;
    case 3:
		$num=3;
        $name="SPACE STATION";
        break;
    case 4:
		$num=4;
        $name="FIREBIRD 4";
        break;
    case 5:
		$num=5;
        $name="CRYOSAT 2";
        break;
    case 6:
		$num=6;
        $name="POPACS 3";
        break;
	case 7:
		$num=7;
        $name="NOAA 16";
        break;
	case 8:
		$num=8;
        $name="RAVAN";
        break;
	case 9:
		$num=9;
        $name="PRISMA";
        break;
	case 10:
		$num=10;
        $name="EUTE 65W";
        break;
	case 11:
		$num=11;
        $name="STARLINK OBJ BM";
        break;
	case 12:
		$num=12;
        $name="IRIDIUM 167";
        break;
	case 13:
		$num=13;
        $name="GALILEO 17 (26D)";
        break;
	case 14:
		$num=14;
        $name="METEOSAT 6";
        break;
	case 15:
		$num=15;
        $name="NIMBUS 6";
        break;
	case 16:
		$num=16;
        $name="DAMPE";
        break;
	case 17:
		$num=17;
        $name="EGYPTSAT 2";
        break;
	case 18:
		$num=18;
        $name="QUAKESAT";
        break;
	case 19:
		$num=19;
        $name="AEROCUBE 4";
        break;
	case 20:
		$num=20;
        $name="NAVSTAR 35 (USA 96)";
        break;
}
?>

<h2 id="myAcc2"><?php echo $name ?></h2>
<div id="myAccForm4" style="background-color:white;border: 1.5px solid #707070;">
	<div style="position:absolute;top:0%;width:100%;height:35%;overflow:hidden;border-top-left-radius:30px;border-top-right-radius:30px;">
		<img src=<?php echo "/resources/sat".$num.".jpg" ?> width="100%"  style="position:relative;top:-25%;">
	</div>
	<div id="chatroom" style="background-color:black;position:absolute;top:30%;width:100%;height:70%;overflow:hidden;border-radius:30px;">
		<div>
			<h2>GALLERY COMING SOON!</h2>
		</div>
		<form action="" method="post">
			<input type="text" class="emailForm4" size="100" name="message" placeholder="   MESSAGE" required="required" style="position:absolute;height:12%;width:97.5%;left:0%;top:88%;border-bottom-left-radius:30px;border-bottom-right-radius:30px;border-top-left-radius:0px;border-top-right-radius:0px;"><br>
			<input type="submit" id="newAccButton3" value="SEND" name="send" style="border: none;position:absolute;height:12%;width:13%;left:87%;top:88%;border-bottom-left-radius:0px;border-bottom-right-radius:30px;border-top-left-radius:0px;border-top-right-radius:0px;background-color:#5875A6;"/>
		</form>
	</div>
</div>


<div class="nonUserFooter">
	<form action="" method="post">
		<button type="submit" id="satListBut2" name="gameButton2">
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
if(isset($_POST["gameButton"])){
	header('Location: /index.php');
}
if(isset($_POST["gameButton2"])){
	header('Location: /satellites.php');
}
mysqli_close($conn);
?>
</body>
</html>
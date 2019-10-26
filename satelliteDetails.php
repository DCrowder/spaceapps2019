

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
}
?>

<h2 id="myAcc"><?php echo $name ?></h2>
<div id="myAccForm" style="background-color:white;border: 1.5px solid #707070;">
	<div style="width:100%;height:30%;overflow:hidden;border-top-left-radius:30px;border-top-right-radius:30px;">
		<img src=<?php echo "/resources/sat".$num.".jpg" ?> width="100%"  style="position:relative;top:-25%;">
	</div>
	<div id="chatroom" style="background-color:black;position:relative;top:0%;width:100%;height:70%;overflow:hidden;border-bottom-left-radius:30px;border-bottom-right-radius:30px;">
		
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
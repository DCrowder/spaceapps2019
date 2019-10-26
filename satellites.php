

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
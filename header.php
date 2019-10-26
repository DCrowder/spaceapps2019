<?php

$conn = mysqli_connect('localhost:3306', 'root', '{password}', 'satellitechasers');



?>
<form action="" method="post">
<button class="header" name="header">
	<h1>SATELLITE CHASERS</h1>
</button>
</form>
<?php
if(isset($_POST["header"])){
	header('Location: /members.php');
}
?>

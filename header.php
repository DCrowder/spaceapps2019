<?php

$conn = mysqli_connect('localhost:3306', 'root', '3s71A83l8_!', 'satellitechasers');



?>
<form action="" method="post">
<button class="header" name="header">
	<h1>SATELLITE</h1><h1>CHASERS</h1>
</button>
</form>
<?php
if(isset($_POST["header"])){
	header('Location: /members.php');
}
?>
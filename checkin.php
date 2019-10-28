<?php
$conn = mysqli_connect('localhost:3306', 'root', '', 'satellitechasers');
$userID=$_POST["userID"];
$satID=$_POST["satID"];
$dateTime=$_POST["dateTime"];
$points=$_POST["points"];
$dist=$_POST["dist"];
$stop=0;
$name='';
if($satID==1){
	$name="OCO-2";
}else if($satID==2){
	$name="VANGUARD 1";
}else if($satID==3){
	$name="SPACE STATION";
}else if($satID==4){
	$name="FIREBIRD 4";
}else if($satID==5){
	$name="CRYOSAT 2";
}else if($satID==6){
	$name="POPACS 3";
}else if($satID==7){
	$name="NOAA 16";
}else if($satID==8){
	$name="RAVAN";
}else if($satID==9){
	$name="PRISMA";
}else if($satID==10){
	$name="EUTE 65W";
}else if($satID==11){
	$name="STARLINK OBJ BM";
}else if($satID==12){
	$name="IRIDIUM 167";
}else if($satID==13){
	$name="GALILEO 17 (26D)";
}else if($satID==14){
	$name="METEOSAT 6";
}else if($satID==15){
	$name="NIMBUS 6";
}else if($satID==16){
	$name="DAMPE";
}else if($satID==17){
	$name="EGYPTSAT 2";
}else if($satID==18){
	$name="QUAKESAT";
}else if($satID==19){
	$name="AEROCUBE 4";
}else if($satID==20){
	$name="NAVSTAR 35 (USA 96)";
}

$result = mysqli_query($conn,'SELECT dateTime FROM checkins WHERE userID="'.$_POST["userID"].'" AND satID="'.$_POST["satID"].'"');
if (mysqli_num_rows($result) >0) {
	while($row = mysqli_fetch_assoc($result)){
		
		$datetime1 = date_create($row["dateTime"]);
		$datetime2 = date_create($dateTime);
		$interval = date_diff($datetime1, $datetime2);
		if( $interval->format('%s')< 7200){
			$stop=1;
		}
	}
}
if($stop==1){
echo "YOU ALREADY CHECKED IN WITH ".$name."!";
}else{
	$sql="INSERT INTO checkins(userID,satID,dateTime,points) VALUES ('".$userID."','".$satID."','".$dateTime."','".$points."')";
	if(mysqli_query($conn,$sql)===TRUE){
		echo ("YOU CHECKED IN WITH ".$name." AT ".$dist." KILOMETERS AWAY! THAT'S WORTH ".$points." POINTS!");
	}else{
		echo "Something went wrong, please log out and log back in! If this keeps happening, let me know in the 'contact us' page!";
	}
}
?>
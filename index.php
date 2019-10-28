

<!DOCTYPE html>
<html>
<head>
<title>Satellite Chasers</title>
<script src="https://files.worldwind.arc.nasa.gov/artifactory/web/0.9.0/worldwind.min.js" type="text/javascript"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<script src="node_modules/satellite.js/dist/satellite.min.js"></script>
<script src="tle2geo.js"></script>
<div id="wrapper">


<?php include('header.php'); 
if(isset($_POST["satListButton"])){
	header('Location: /satellites.php');
}
if(isset($_POST["contactUsBut"])){
	header('Location: /contact.php');
}
if(isset($_COOKIE["seshID"])) {
	$query = mysqli_query($conn,'SELECT * FROM sessions WHERE seshID="'.$_COOKIE["seshID"].'"');
	if(mysqli_num_rows($query) > 0){
		header('Location: members.php');
	}
}
if(isset($_POST["loginButton"])){
	$result = mysqli_query($conn,'SELECT password, userID FROM users WHERE email="'.$_POST["Email"].'"');
	if (mysqli_num_rows($result) ==1) {
 	   	while($row = mysqli_fetch_assoc($result)){
			if($row["password"]==$_POST["Password"]){
				echo "Login Succesful";	
				$query = mysqli_query($conn,'SELECT seshID FROM sessions WHERE userID="'.$row["userID"].'"');
				$key="";
				for($i=0;$i<10;$i++){
					$key=$key.substr("aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789",rand(0,61),1);
				}
				if(mysqli_num_rows($query) > 0){
					$sql = "UPDATE sessions SET seshID='".$key."' WHERE userID='".$row["userID"]."'";
					mysqli_query($conn, $sql);
				}else{
					$sql = "INSERT INTO sessions (seshID,userID) VALUES ('".$key."','".$row["userID"]."')";
					mysqli_query($conn, $sql);
				}
				setcookie("seshID", $key, time() + (60*60), "/");
				header('Location: members.php');
				exit;	
			}else{echo "<p>INCORRECT PASSWORD</p>";}	
   		}
	} else {
    		echo "<p>USER NOT FOUND</p>";
	}
}

if(isset($_POST["newAccButton"])){
	header('Location: newAccount.php');
}
?>

<div style="width: 90%;">
    <!-- Create a canvas for Web WorldWind. -->
    <canvas id="canvasOne" onclick="stop=1;">
        Your browser does not support HTML5 Canvas.
    </canvas>
</div>
<script>
var TLE1;
var TLE2;
var TLE3;
var TLE4;
var TLE5;
var TLE6;
var TLE7;
var TLE8;
var TLE9;
var TLE10;
var TLE11;
var TLE12;
var TLE13;
var TLE14;
var TLE15;
var TLE16;
var TLE17;
var TLE18;
var TLE19;
var TLE20;
fetch("https://www.n2yo.com/rest/v1/satellite/tle/40059&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE1=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/5&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE2=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/25544&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE3=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/40378&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE4=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/36508&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE5=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/39270&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE6=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/26536&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE7=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/41849&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE8=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/44072&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE9=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/41382&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE10=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/44294&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE11=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/43931&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE12=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/41861&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE13=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/22912&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE14=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/7924&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE15=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/41173&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE16=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/39678&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE17=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/27845&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE18=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/38769&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE19=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
fetch("https://www.n2yo.com/rest/v1/satellite/tle/22877&apiKey=AKGE9N-GQRYHC-ZKEZ9E-47WY")
   .then(async r=> TLE20=(await r.json()))
   .catch(e=>console.error('Boo...' + e))
</script>
<div id="home">
<br>
	<form action="" method="post">
	<input type="email" class="emailForm" size="40" name="Email" placeholder="   EMAIL"><br>
	<input type="password" id="passwordForm" size="40" name="Password" placeholder="   PASSWORD"><br>
	<input type="submit" class="loginButton" value="LOGIN"  name="loginButton"/>
	</form> 
	<form action="" method="post">
	<input type="submit" value="CREATE AN ACCOUNT" class="newAccButton" name="newAccButton" class="but" />
	</form> 
</div>
<div class="nonUserFooter">
	<form action="" method="post">
	<button type="submit" id="satListBut2" name="satListButton">
		<img src="/resources/sat.png" alt="SATLIST">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="contactUsBut" name="contactUsBut">
		<img src="/resources/contact.png" alt="CONTACT">
	</button>
	</form>
</div>

<div id="block"><h1>THIS SITE IS NOT INTENDED FOR USE ON A DESKTOP, PLEASE USE A SMALLER DEVICE.</h1></div>



<?php

mysqli_close($conn);
?>
<script>
	var stop=0;
	var mylat=0;
	var mylong=0;
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  }
}
function showPosition(position) {
	if(stop==0)wwd.goTo(new WorldWind.Location(position.coords.latitude, position.coords.longitude));
	mylat=position.coords.latitude;
	mylong=position.coords.longitude;
	
}
getLocation();

    window.addEventListener("load", eventWindowLoaded, false);

	var wwd = new WorldWind.WorldWindow("canvasOne");
    function eventWindowLoaded() {
	
        wwd.addLayer(new WorldWind.BMNGOneImageLayer());
        wwd.addLayer(new WorldWind.BMNGLandsatLayer());

	wwd.addLayer(new WorldWind.AtmosphereLayer());
        wwd.addLayer(new WorldWind.ViewControlsLayer(wwd));
	wwd.addLayer(new WorldWind.StarFieldLayer());

var modelLayer = new WorldWind.RenderableLayer();
wwd.addLayer(modelLayer);
var config = {dirPath: 'resources/'};
var position = new WorldWind.Position(((tle2geo(TLE1).latitude)*57.2958),((tle2geo(TLE1).longitude)*57.2958),1000* tle2geo(TLE1).height);
var colladaLoader = new WorldWind.ColladaLoader(position, config);
colladaLoader.load("satellite.dae", animateTest);
var position = new WorldWind.Position(((tle2geo(TLE2).latitude)*57.2958),((tle2geo(TLE2).longitude)*57.2958),1000* tle2geo(TLE2).height);
var colladaLoader2 = new WorldWind.ColladaLoader(position, config);
colladaLoader2.load("satellite.dae", animateTest2);
var position = new WorldWind.Position(((tle2geo(TLE3).latitude)*57.2958), ((tle2geo(TLE3).longitude)*57.2958),1000* tle2geo(TLE3).height);
var colladaLoader3 = new WorldWind.ColladaLoader(position, config);
colladaLoader3.load("satellite.dae", animateTest3);
var position = new WorldWind.Position(((tle2geo(TLE4).latitude)*57.2958),((tle2geo(TLE4).longitude)*57.2958),1000* tle2geo(TLE4).height);
var colladaLoader4 = new WorldWind.ColladaLoader(position, config);
colladaLoader4.load("satellite.dae", animateTest4);
var position = new WorldWind.Position(((tle2geo(TLE5).latitude)*57.2958), ((tle2geo(TLE5).longitude)*57.2958),1000* tle2geo(TLE5).height);
var colladaLoader5 = new WorldWind.ColladaLoader(position, config);
colladaLoader5.load("satellite.dae", animateTest5);
var position = new WorldWind.Position(((tle2geo(TLE6).latitude)*57.2958), ((tle2geo(TLE6).longitude)*57.2958),1000* tle2geo(TLE6).height);
var colladaLoader6 = new WorldWind.ColladaLoader(position, config);
colladaLoader6.load("satellite.dae", animateTest6);
var position = new WorldWind.Position(((tle2geo(TLE7).latitude)*57.2958), ((tle2geo(TLE7).longitude)*57.2958),1000* tle2geo(TLE7).height);
var colladaLoader7 = new WorldWind.ColladaLoader(position, config);
colladaLoader7.load("satellite.dae", animateTest7);
var position = new WorldWind.Position(((tle2geo(TLE8).latitude)*57.2958), ((tle2geo(TLE8).longitude)*57.2958),1000* tle2geo(TLE8).height);
var colladaLoader8 = new WorldWind.ColladaLoader(position, config);
colladaLoader8.load("satellite.dae", animateTest8);
var position = new WorldWind.Position(((tle2geo(TLE9).latitude)*57.2958), ((tle2geo(TLE9).longitude)*57.2958),1000* tle2geo(TLE9).height);
var colladaLoader9 = new WorldWind.ColladaLoader(position, config);
colladaLoader9.load("satellite.dae", animateTest9);
var position = new WorldWind.Position(((tle2geo(TLE10).latitude)*57.2958), ((tle2geo(TLE10).longitude)*57.2958),1000* tle2geo(TLE10).height);
var colladaLoader10 = new WorldWind.ColladaLoader(position, config);
colladaLoader10.load("satellite.dae", animateTest10);
var position = new WorldWind.Position(((tle2geo(TLE11).latitude)*57.2958), ((tle2geo(TLE11).longitude)*57.2958),500* tle2geo(TLE11).height);
var colladaLoader11 = new WorldWind.ColladaLoader(position, config);
colladaLoader11.load("satellite.dae", animateTest11);
var position = new WorldWind.Position(((tle2geo(TLE12).latitude)*57.2958), ((tle2geo(TLE12).longitude)*57.2958),500* tle2geo(TLE12).height);
var colladaLoader12 = new WorldWind.ColladaLoader(position, config);
colladaLoader12.load("satellite.dae", animateTest12);
var position = new WorldWind.Position(((tle2geo(TLE13).latitude)*57.2958), ((tle2geo(TLE13).longitude)*57.2958),500* tle2geo(TLE13).height);
var colladaLoader13 = new WorldWind.ColladaLoader(position, config);
colladaLoader13.load("satellite.dae", animateTest13);
var position = new WorldWind.Position(((tle2geo(TLE14).latitude)*57.2958), ((tle2geo(TLE14).longitude)*57.2958),500* tle2geo(TLE14).height);
var colladaLoader14 = new WorldWind.ColladaLoader(position, config);
colladaLoader14.load("satellite.dae", animateTest14);
var position = new WorldWind.Position(((tle2geo(TLE15).latitude)*57.2958), ((tle2geo(TLE15).longitude)*57.2958),500* tle2geo(TLE15).height);
var colladaLoader15 = new WorldWind.ColladaLoader(position, config);
colladaLoader15.load("satellite.dae", animateTest15);
var position = new WorldWind.Position(((tle2geo(TLE16).latitude)*57.2958), ((tle2geo(TLE16).longitude)*57.2958),500* tle2geo(TLE16).height);
var colladaLoader16 = new WorldWind.ColladaLoader(position, config);
colladaLoader16.load("satellite.dae", animateTest16);
var position = new WorldWind.Position(((tle2geo(TLE17).latitude)*57.2958), ((tle2geo(TLE17).longitude)*57.2958),500* tle2geo(TLE17).height);
var colladaLoader17 = new WorldWind.ColladaLoader(position, config);
colladaLoader17.load("satellite.dae", animateTest17);
var position = new WorldWind.Position(((tle2geo(TLE18).latitude)*57.2958), ((tle2geo(TLE18).longitude)*57.2958),500* tle2geo(TLE18).height);
var colladaLoader18 = new WorldWind.ColladaLoader(position, config);
colladaLoader18.load("satellite.dae", animateTest18);
var position = new WorldWind.Position(((tle2geo(TLE19).latitude)*57.2958), ((tle2geo(TLE19).longitude)*57.2958),500* tle2geo(TLE19).height);
var colladaLoader19 = new WorldWind.ColladaLoader(position, config);
colladaLoader19.load("satellite.dae", animateTest19);
var position = new WorldWind.Position(((tle2geo(TLE20).latitude)*57.2958), ((tle2geo(TLE20).longitude)*57.2958),500* tle2geo(TLE20).height);
var colladaLoader20 = new WorldWind.ColladaLoader(position, config);
colladaLoader20.load("satellite.dae", animateTest20);

function animateTest(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		//console.log(typeof ((tle2geo(TLE1).latitude)*57.2958));
        model.position = new WorldWind.Position(((tle2geo(TLE1).latitude)*57.2958), ((tle2geo(TLE1).longitude)*57.2958),500* tle2geo(TLE1).height);
		if(sat==1 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE1).latitude)*57.2958),((tle2geo(TLE1).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest2(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE2).latitude)*57.2958),((tle2geo(TLE2).longitude)*57.2958),500* tle2geo(TLE2).height);
		if(sat==2 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE2).latitude)*57.2958),((tle2geo(TLE2).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest3(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE3).latitude)*57.2958), ((tle2geo(TLE3).longitude)*57.2958),500* tle2geo(TLE3).height);
		if(sat==3 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE3).latitude)*57.2958),((tle2geo(TLE3).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest4(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE4).latitude)*57.2958), ((tle2geo(TLE4).longitude)*57.2958),500* tle2geo(TLE4).height);
		if(sat==4 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE4).latitude)*57.2958),((tle2geo(TLE4).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest5(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE5).latitude)*57.2958), ((tle2geo(TLE5).longitude)*57.2958),500* tle2geo(TLE5).height);
		if(sat==5 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE5).latitude)*57.2958),((tle2geo(TLE5).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest6(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE6).latitude)*57.2958), ((tle2geo(TLE6).longitude)*57.2958),500* tle2geo(TLE6).height);
		if(sat==6 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE6).latitude)*57.2958),((tle2geo(TLE6).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest7(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE7).latitude)*57.2958), ((tle2geo(TLE7).longitude)*57.2958),500* tle2geo(TLE7).height);
		if(sat==7 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE7).latitude)*57.2958),((tle2geo(TLE7).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest8(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE8).latitude)*57.2958), ((tle2geo(TLE8).longitude)*57.2958),500* tle2geo(TLE8).height);
		if(sat==8 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE8).latitude)*57.2958),((tle2geo(TLE8).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest9(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE9).latitude)*57.2958), ((tle2geo(TLE9).longitude)*57.2958),500* tle2geo(TLE9).height);
		if(sat==9 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE9).latitude)*57.2958),((tle2geo(TLE9).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest10(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
        model.position = new WorldWind.Position(((tle2geo(TLE10).latitude)*57.2958), ((tle2geo(TLE10).longitude)*57.2958),500* tle2geo(TLE10).height);
		if(sat==10 && stop==0)wwd.goTo(new WorldWind.Location(((tle2geo(TLE10).latitude)*57.2958),((tle2geo(TLE10).longitude)*57.2958)));
        wwd.redraw();
    }, 1000);
}
function animateTest11(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE11).longitude)*57.2958);
		var lat = ((tle2geo(TLE11).latitude)*57.2958);
		var long = ((tle2geo(TLE11).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==11 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest12(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE12).longitude)*57.2958);
		var lat = ((tle2geo(TLE12).latitude)*57.2958);
		var long = ((tle2geo(TLE12).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==12 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest13(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE13).longitude)*57.2958);
		var lat = ((tle2geo(TLE13).latitude)*57.2958);
		var long = ((tle2geo(TLE13).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==13 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest14(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE14).longitude)*57.2958);
		var lat = ((tle2geo(TLE14).latitude)*57.2958);
		var long = ((tle2geo(TLE14).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==14 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest15(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE15).longitude)*57.2958);
		var lat = ((tle2geo(TLE15).latitude)*57.2958);
		var long = ((tle2geo(TLE15).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==15 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest16(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE16).longitude)*57.2958);
		var lat = ((tle2geo(TLE16).latitude)*57.2958);
		var long = ((tle2geo(TLE16).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==16 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest17(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE17).longitude)*57.2958);
		var lat = ((tle2geo(TLE17).latitude)*57.2958);
		var long = ((tle2geo(TLE17).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==17 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest18(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE18).longitude)*57.2958);
		var lat = ((tle2geo(TLE18).latitude)*57.2958);
		var long = ((tle2geo(TLE18).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==18 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest19(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE19).longitude)*57.2958);
		var lat = ((tle2geo(TLE19).latitude)*57.2958);
		var long = ((tle2geo(TLE19).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==19 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
function animateTest20(model) {
	var sat=<?php if(isset($_GET["sat"])){echo $_GET["sat"];}else{echo 0;}  ?>;
    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);
    window.setInterval(function() {
		var height = ((tle2geo(TLE20).longitude)*57.2958);
		var lat = ((tle2geo(TLE20).latitude)*57.2958);
		var long = ((tle2geo(TLE20).longitude)*57.2958);
        model.position = new WorldWind.Position(lat, long,height);
		if(sat==20 && stop==0)wwd.goTo(new WorldWind.Location(lat,long));
        wwd.redraw();
    }, 1000);
}
        var handleClick = function (recognizer) {
			stop=1;
            var x = recognizer.clientX,
                y = recognizer.clientY;

            var pickList = wwd.pick(wwd.canvasCoordinates(x, y));
            if (pickList.objects.length === 1 && pickList.objects[0].isTerrain) {
                var position = pickList.objects[0].position;
                wwd.goTo(new WorldWind.Location(position.latitude, position.longitude));
				
            }
        };
        var clickRecognizer = new WorldWind.ClickRecognizer(wwd, handleClick);
        var tapRecognizer = new WorldWind.TapRecognizer(wwd, handleClick);

}
</script>
</div>
</body>
</html>
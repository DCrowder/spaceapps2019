

<!DOCTYPE html>
<html>
<head>
<title>Satellite Chasers</title>
<script src="https://files.worldwind.arc.nasa.gov/artifactory/web/0.9.0/worldwind.min.js" type="text/javascript"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>

<div id="wrapper">


<?php include('header.php'); ?>

<div style="width: 90%;">
    <!-- Create a canvas for Web WorldWind. -->
    <canvas id="canvasOne" >
        Your browser does not support HTML5 Canvas.
    </canvas>
</div>

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
<?php
if(isset($_POST["contactUsBut"])){
	header('Location: /contact.php');
}
if(isset($_COOKIE["seshID"])) {
	$query = mysqli_query($conn,'SELECT * FROM sessions WHERE seshID="'.$_COOKIE["seshID"].'"');
	if(mysqli_num_rows($query) > 0){
		header('Location: members.php?sesh='.$_COOKIE["seshID"]);
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





<?php
if(isset($_POST["satListButton"])){
	header('Location: /satellites.php');
}
mysqli_close($conn);
?>
<script>
	var i=0;
	var lat=28;
	var long=-83;
	var lat2=28;
	var long2=-83;
	var lat3=28;
	var long3=-83;
	var lat4=28;
	var long4=-83;
	var lat5=-24;
	var long5=135;
	var lat6=-24;
	var long6=135;
	var lat7=-24;
	var long7=135;
	var lat8=-24;
	var long8=135;
    // Register an event listener to be called when the page is loaded.
    window.addEventListener("load", eventWindowLoaded, false);

    // Define the event listener to initialize Web WorldWind.
	var wwd = new WorldWind.WorldWindow("canvasOne");
    function eventWindowLoaded() {
        // Create a WorldWindow for the canvas.
        
        // Add some image layers to the WorldWindow's globe.
        wwd.addLayer(new WorldWind.BMNGOneImageLayer());
        wwd.addLayer(new WorldWind.BMNGLandsatLayer());

        // Add view controls to the WorldWindow.
        //wwd.addLayer(new WorldWind.CoordinatesDisplayLayer(wwd));
	wwd.addLayer(new WorldWind.AtmosphereLayer());
        wwd.addLayer(new WorldWind.ViewControlsLayer(wwd));
	wwd.addLayer(new WorldWind.StarFieldLayer());

var modelLayer = new WorldWind.RenderableLayer();
wwd.addLayer(modelLayer);
var position = new WorldWind.Position(28, -83, 200000.0);
var config = {dirPath: 'resources/'};
var colladaLoader = new WorldWind.ColladaLoader(position, config);
colladaLoader.load("satellite.dae", animateTest);

function animateTest(model) {

    model.scale = 300000;
    model.xRotation = 180;
    modelLayer.addRenderable(model);

    // Use a timer to move the model
    var lat = 28;
    var lon = -83;
    var alt = 200000;
    window.setInterval(function() {


        lat += 0.1;
        lon += 0.1;
        alt += 100;

        model.position = new WorldWind.Position(lat, lon, alt);

        wwd.redraw();

    }, 10);

}

        // The common gesture-handling function.
        var handleClick = function (recognizer) {
            // Obtain the event location.
            var x = recognizer.clientX,
                y = recognizer.clientY;

            // Perform the pick. Must first convert from window coordinates to canvas coordinates, which are
            // relative to the upper left corner of the canvas rather than the upper left corner of the page.
            var pickList = wwd.pick(wwd.canvasCoordinates(x, y));

            // If only one thing is picked and it is the terrain, tell the WorldWindow to go to the picked location.
            if (pickList.objects.length === 1 && pickList.objects[0].isTerrain) {
                var position = pickList.objects[0].position;
                wwd.goTo(new WorldWind.Location(position.latitude, position.longitude));
            }
        };

	// Listen for mouse clicks.
        var clickRecognizer = new WorldWind.ClickRecognizer(wwd, handleClick);

        // Listen for taps on mobile devices.
        var tapRecognizer = new WorldWind.TapRecognizer(wwd, handleClick);

}
</script>
</div>
</body>
</html>
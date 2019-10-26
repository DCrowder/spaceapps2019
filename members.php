

<!DOCTYPE html>
<html>
<head>
<title>Satellite Chasers</title>
<script src="https://files.worldwind.arc.nasa.gov/artifactory/web/0.9.0/worldwind.min.js" type="text/javascript"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="theme.css">
<script src="myScript.js"></script>
<?php include('header.php'); ?>

<div style="width: 90%;height:900px;">
    <!-- Create a canvas for Web WorldWind. -->
    <canvas id="canvasOne" >
        Your browser does not support HTML5 Canvas.
    </canvas>
</div>

	
<input type="submit" onclick="alert('NO SATELLITES OVERHEAD!');" id="checkinButton" value="CHECK IN" name="checkinButton"/>

<input type="submit" onclick="getLocation();wwd.goTo(new WorldWind.Location(mylat,mylong));" id="goToMe" value="GO TO ME"/>
	
<script>
var TLE1;
var TLE2;
var TLE3;
var TLE4;
var TLE5;
var TLE6;
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
setTimeout(function(){ console.log(TLE1.tle+"\n\n"+TLE2.tle+"\n\n"+TLE3.tle+"\n\n"+TLE4.tle+"\n\n"+TLE5.tle+"\n\n"+TLE6.tle); }, 1000);
</script>

<h3 id="checkStatus">
NO SATELLITES OVERHEAD
</h3>
<h3 id="spotStatus">
CHECK IN NOT AVAILABLE
</h3>

<br>

<div class="memberFooter">	
	<form action="" method="post">
	<button type="submit" id="satListButton" name="satListButton">
		<img src="/resources/sat.png" alt="SATLIST">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="myAccountButton" name="myAccountButton">
		<img src="/resources/myAcc.png" alt="ACCOUNT">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="leaderBoardButton" name="leaderBoardButton">
		<img src="/resources/trophy.png" alt="LEADERS">
	</button>
	</form>
	<form action="" method="post">
	<button type="submit" id="contactUsButton" name="contactUsButton">
		<img src="/resources/contact.png" alt="CONTACT">
	</button>
	</form>
</div>
<?php
if(isset($_POST["leaderBoardButton"])){
	header('Location: /leaderboard.php');
}
if(isset($_POST["satListButton"])){
	header('Location: /satellites.php');
}
if(isset($_POST["myAccountButton"])){
	header('Location: /myAccount.php');
}
if(isset($_POST["contactUsButton"])){
	header('Location: /contact.php');
}
$key = $_COOKIE["seshID"];
$result = mysqli_query($conn,'SELECT userID FROM sessions WHERE seshID="'.$key.'"');
if($row = mysqli_fetch_assoc($result)){
	$id=$row["userID"];
	$result = mysqli_query($conn,'SELECT firstName FROM users WHERE id="'.$id.'"');
	while($row = mysqli_fetch_assoc($result)){
		echo "<br>".$row["firstName"];
	}
}else{
	echo "<br>invalid session key";
	header('Location: index.php');
}
include('footer.php'); 
?>
<script>
	var mylat=0;
	var mylong=0;
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  }
}
function showPosition(position) {
	wwd.goTo(new WorldWind.Location(position.coords.latitude, position.coords.longitude));
	mylat=position.coords.latitude;
	mylong=position.coords.longitude;
}
getLocation();
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

	// Create a layer to hold the surface shapes.
//        var shapesLayer = new WorldWind.RenderableLayer("Surface Shapes");
//        wwd.addLayer(shapesLayer);

        // Create and set common attributes for the surface shapes.
        // Real apps typically create new attributes objects for each shape unless they know the attributes
        // can be shared among all shapes.
//        var attributes = new WorldWind.ShapeAttributes(null);
//        attributes.outlineColor = WorldWind.Color.BLUE;
//        attributes.interiorColor = new WorldWind.Color(0, 1, 1, 0.5);

        // Create common highlight attributes. These are displayed whenever the user hovers over the shapes.
//        var highlightAttributes = new WorldWind.ShapeAttributes(attributes);
//        highlightAttributes.interiorColor = new WorldWind.Color(1, 1, 1, 1);

	// Create a surface circle.

	//setTimeout('alert(mylat+" "+mylong);',0);
	//alert(mylat+" "+mylong+" second");
//        var circle = new WorldWind.SurfaceCircle(new WorldWind.Location(27,-83), 4e5, attributes);
//        circle.highlightAttributes = highlightAttributes;
//        shapesLayer.addRenderable(circle);
	// Set up a highlight controller to handle highlighting when the user hovers the shapes.
//        var highlightController = new WorldWind.HighlightController(wwd);
	
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
</body>
</html>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>NASA Space Apps Challenge</title>
<!-- Include the Web WorldWind library. -->
<script src="https://files.worldwind.arc.nasa.gov/artifactory/web/0.9.0/worldwind.min.js"
        type="text/javascript">
</script>



</head>
<body style="background-color: #DCDCDC;">
<div id="header">
<h1>
NASA SPACE APPS CHALLENGE
</h1>

</div>

<h3 id="title" style="padding-top:50px;text-align: center;font-family: Futura,Trebuchet MS,Arial,sans-serif; ">Hosted by Tampa Hacker Space</h3>
<div style="width: 90%;height:500px;margin:auto;">
    <!-- Create a canvas for Web WorldWind. -->
    <canvas id="canvasOne"  style="width: 100%; height: 100%; background-color: black;border-radius:30px;box-shadow: 0px 0px 7px 4px rgb(200,200,200);">
        Your browser does not support HTML5 Canvas.
    </canvas>
</div>
<style>
body{
max-width:1000px;
margin:auto;
}
.sats {
	padding-top:40px;
	padding-left:50px;
	padding-right:50px;
	margin:auto;
	grid-template-columns: repeat(4, 1fr);
	display: grid;
	grid-gap: 15px;
}
.sats div{

	box-shadow: 0px 0px 7px 4px rgb(200,200,200);
	border-radius:15px;
	height: 120px;
	text-align:center;
	background-color: white;
	padding-bottom:10px;
}
.sats div:hover {
	background-color:	#C0C0C0;
}
.sats h3 {
	font-family: Futura,Trebuchet MS,Arial,sans-serif;
        margin-bottom:0;
}
.sats p {
	overflow-wrap: normal;
	font-family: Futura,Trebuchet MS,Arial,sans-serif;
        margin-top:0; 
}
.sats hr {
        width:60%;
}
.descr{
	font-family: Futura,Trebuchet MS,Arial,sans-serif;
	grid-column: span 4 / span 4;
}
.descr h4 {
margin-top:50px;
}
#header{
	border-bottom-left-radius:30px;
	border-bottom-right-radius:30px;
	text-align:center;
	font-family: Futura,Trebuchet MS,Arial,sans-serif;
	color:white;
	position: fixed;
  	top: 0;
	width:1000px;
	height:60px;
	background-color:black;
}
#header h1{
margin-top:13px;
padding-left:10px;
}
@media screen and (max-width: 1000px) {

.descr h4 {
margin-top:40px;
}
.descr{
	grid-column: span 2 / span 2;
}
.sats {
	grid-template-columns: repeat(2, 1fr);
}
#header{
font-size:1.5em;
border-radius:0px;
height:140px;
}
#header h1{
margin-top:33px;
}
#title{
	margin-top:130px;
	font-size:2em;
}
.sats div{
	height:100px;
}
}
</style>
<script>
	function show1(){
		if(document.getElementById("descr1").style.display=="grid"){
			document.getElementById("descr1").style.display="none";
			return 0;
		}
		document.getElementById("descr8").style.display="none";
		document.getElementById("descr7").style.display="none";
		document.getElementById("descr6").style.display="none";
		document.getElementById("descr5").style.display="none";
		document.getElementById("descr4").style.display="none";
		document.getElementById("descr3").style.display="none";
		document.getElementById("descr2").style.display="none";
		document.getElementById("descr1").style.display="grid";
	}
	function show2(){
		if(document.getElementById("descr2").style.display=="grid"){
			document.getElementById("descr2").style.display="none";
			return 0;
		}
		document.getElementById("descr8").style.display="none";
		document.getElementById("descr7").style.display="none";
		document.getElementById("descr6").style.display="none";
		document.getElementById("descr5").style.display="none";
		document.getElementById("descr4").style.display="none";
		document.getElementById("descr3").style.display="none";
		document.getElementById("descr2").style.display="grid";
		document.getElementById("descr1").style.display="none";
	}
	function show3(){
		if(document.getElementById("descr3").style.display=="grid"){
			document.getElementById("descr3").style.display="none";
			return 0;
		}
		document.getElementById("descr8").style.display="none";
		document.getElementById("descr7").style.display="none";
		document.getElementById("descr6").style.display="none";
		document.getElementById("descr5").style.display="none";
		document.getElementById("descr4").style.display="none";
		document.getElementById("descr3").style.display="grid";
		document.getElementById("descr2").style.display="none";
		document.getElementById("descr1").style.display="none";
	}
	function show4(){
		if(document.getElementById("descr4").style.display=="grid"){
			document.getElementById("descr4").style.display="none";
			return 0;
		}
		document.getElementById("descr8").style.display="none";
		document.getElementById("descr7").style.display="none";
		document.getElementById("descr6").style.display="none";
		document.getElementById("descr5").style.display="none";
		document.getElementById("descr4").style.display="grid";
		document.getElementById("descr3").style.display="none";
		document.getElementById("descr2").style.display="none";
		document.getElementById("descr1").style.display="none";
	}
	function show5(){
		if(document.getElementById("descr5").style.display=="grid"){
			document.getElementById("descr5").style.display="none";
			return 0;
		}
		document.getElementById("descr8").style.display="none";
		document.getElementById("descr7").style.display="none";
		document.getElementById("descr6").style.display="none";
		document.getElementById("descr5").style.display="grid";
		document.getElementById("descr4").style.display="none";
		document.getElementById("descr3").style.display="none";
		document.getElementById("descr2").style.display="none";
		document.getElementById("descr1").style.display="none";
	}
	function show6(){
		if(document.getElementById("descr6").style.display=="grid"){
			document.getElementById("descr6").style.display="none";
			return 0;
		}
		document.getElementById("descr8").style.display="none";
		document.getElementById("descr7").style.display="none";
		document.getElementById("descr6").style.display="grid";
		document.getElementById("descr5").style.display="none";
		document.getElementById("descr4").style.display="none";
		document.getElementById("descr3").style.display="none";
		document.getElementById("descr2").style.display="none";
		document.getElementById("descr1").style.display="none";
	}
	function show7(){
		if(document.getElementById("descr7").style.display=="grid"){
			document.getElementById("descr7").style.display="none";
			return 0;
		}
		document.getElementById("descr8").style.display="none";
		document.getElementById("descr7").style.display="grid";
		document.getElementById("descr6").style.display="none";
		document.getElementById("descr5").style.display="none";
		document.getElementById("descr4").style.display="none";
		document.getElementById("descr3").style.display="none";
		document.getElementById("descr2").style.display="none";
		document.getElementById("descr1").style.display="none";
	}
	function show8(){
		if(document.getElementById("descr8").style.display=="grid"){
			document.getElementById("descr8").style.display="none";
			return 0;
		}
		document.getElementById("descr8").style.display="grid";
		document.getElementById("descr7").style.display="none";
		document.getElementById("descr6").style.display="none";
		document.getElementById("descr5").style.display="none";
		document.getElementById("descr4").style.display="none";
		document.getElementById("descr3").style.display="none";
		document.getElementById("descr2").style.display="none";
		document.getElementById("descr1").style.display="none";
	}
	function close1(){
		document.getElementById("descr1").style.display="none";
	}
	function close2(){
		document.getElementById("descr2").style.display="none";
	}
	function close3(){
		document.getElementById("descr3").style.display="none";
	}
	function close4(){
		document.getElementById("descr4").style.display="none";
	}
	function close5(){
		document.getElementById("descr5").style.display="none";
	}
	function close6(){
		document.getElementById("descr6").style.display="none";
	}
	function close7(){
		document.getElementById("descr7").style.display="none";
	}
	function close8(){
		document.getElementById("descr8").style.display="none";
	}
</script>
<div class="sats">
		<div onclick="show1();wwd.goTo(new WorldWind.Location(lat, long));">
			<h3>Terra</h3>
			<hr>
			<p>Monitoring Climate Change Around the Globe</p>
		</div>
		<div onclick="show2();wwd.goTo(new WorldWind.Location(lat2, long2));">
			<h3>OCO-2</h3>
			<hr>
			<p>Detecting Human Contribution to Atmospheric CO2</p>
		</div>
		<div onclick="show3();wwd.goTo(new WorldWind.Location(lat3, long3));">
			<h3>Aura</h3>
			<hr>
			<p>Mapping Risk of Sunburn Across the U.S.</p>
		</div>
		<div onclick="show4();wwd.goTo(new WorldWind.Location(lat4, long4));">
			<h3>SMAP</h3>
			<hr>
			<p>Categorizing Droughts in Australia</p>
		</div>
		
		<div class="descr" onclick="close1();" id="descr1" style="display:none;">
			<h4><a href="https://visibleearth.nasa.gov/source/64/terra-aster">See Terra's Discoveries on Visible Earth!</a></h4>
		</div>
		<div class="descr" onclick="close2();" id="descr2" style="display:none;">
			<h4><a href="https://visibleearth.nasa.gov/source/1575/oco-2">See OCO-2's Discoveries on Visible Earth!</a></h4>
		</div>
		<div class="descr" onclick="close3();" id="descr3" style="display:none;">
			<h4><a href="https://visibleearth.nasa.gov/source/89/aura-omi">See Aura's Discoveries on Visible Earth!</a></h4>
		</div>
		<div class="descr" onclick="close4();" id="descr4" style="display:none;">
			<h4><a href="https://visibleearth.nasa.gov/source/74/aqua-modis">See SMAP's Discoveries on Visible Earth!</a></h4>
		</div>
		<div class="descr" onclick="close5();" id="descr5" style="display:none;">
			test content5
		</div>
		<div class="descr" onclick="close6();" id="descr6" style="display:none;">
			test content6
		</div>
		<div class="descr" onclick="close7();" id="descr7" style="display:none;">
			test content7
		</div>
		<div class="descr" onclick="close8();" id="descr8" style="display:none;">
			test content8
		</div>
		
		<div onclick="show5();wwd.goTo(new WorldWind.Location(lat5, long5));" style="display:none;">
			<h3>sat5</h3>
			<hr>
			<p>description</p>
		</div>
		<div onclick="show6();wwd.goTo(new WorldWind.Location(lat6, long6));" style="display:none;">
			<h3>sat6</h3>
			<hr>
			<p>description</p>
		</div>
		<div onclick="show7();wwd.goTo(new WorldWind.Location(lat7, long7));" style="display:none;">
			<h3>sat7</h3>
			<hr>
			<p>description</p>
		</div>
		<div onclick="show8();wwd.goTo(new WorldWind.Location(lat8, long8));" style="display:none;">
			<h3>sat8</h3>
			<hr>
			<p>description</p>
		</div>

</div>
<h2 style="text-align: center;font-family: Futura,Trebuchet MS,Arial,sans-serif;margin-bottom=0;">
David Crowder & Austin Griffith
</h2>
<h3 style="text-align: center;font-family: Futura,Trebuchet MS,Arial,sans-serif;margin-bottom=0;margin-top=0;">
Satellite Chasers!
</h3>
<h3 style="text-align: center;font-family: Futura,Trebuchet MS,Arial,sans-serif;margin-top=0;">
2019
</h3>
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
	
	var polygonLayer = new WorldWind.RenderableLayer();
	//polygonsLayer.displayName = "Polygons";
	wwd.addLayer(polygonLayer);

	var boundaries = [];
	boundaries.push(new WorldWind.Position(28, -83, 200000.0));
	boundaries.push(new WorldWind.Position(28, -83, 200000.0));
	boundaries.push(new WorldWind.Position(28, -83, 200000.0));
	boundaries.push(new WorldWind.Position(28, -83, 200000.0));

	var polygonAttributes = new WorldWind.ShapeAttributes(null);
	polygonAttributes.imageSource = "data/sat.png";
	polygonAttributes.drawInterior = true;
	polygonAttributes.outlineColor = WorldWind.Color.BLUE;
	polygonAttributes.drawOutline = true;
	polygonAttributes.applyLighting = true;
	
	var polygon = new WorldWind.Polygon(boundaries, polygonAttributes);
	polygon.textureCoordinates = [
            [new WorldWind.Vec2(0, 0), new WorldWind.Vec2(1, 0), new WorldWind.Vec2(1, 1), new WorldWind.Vec2(0, 1)]
        ];
	polygon.extrude = false;
	polygonLayer.addRenderable(polygon);

	var polygon2 = new WorldWind.Polygon(boundaries, polygonAttributes);
	polygon2.textureCoordinates = [
            [new WorldWind.Vec2(0, 0), new WorldWind.Vec2(1, 0), new WorldWind.Vec2(1, 1), new WorldWind.Vec2(0, 1)]
        ];
	polygon2.extrude = false;
	polygonLayer.addRenderable(polygon2);

	var polygon3 = new WorldWind.Polygon(boundaries, polygonAttributes);
	polygon3.textureCoordinates = [
            [new WorldWind.Vec2(0, 0), new WorldWind.Vec2(1, 0), new WorldWind.Vec2(1, 1), new WorldWind.Vec2(0, 1)]
        ];
	polygon3.extrude = false;
	polygonLayer.addRenderable(polygon3);

	var polygon4 = new WorldWind.Polygon(boundaries, polygonAttributes);
	polygon4.textureCoordinates = [
            [new WorldWind.Vec2(0, 0), new WorldWind.Vec2(1, 0), new WorldWind.Vec2(1, 1), new WorldWind.Vec2(0, 1)]
        ];
	polygon4.extrude = false;
	polygonLayer.addRenderable(polygon4);

	var polygon5 = new WorldWind.Polygon(boundaries, polygonAttributes);
	polygon5.textureCoordinates = [
            [new WorldWind.Vec2(0, 0), new WorldWind.Vec2(1, 0), new WorldWind.Vec2(1, 1), new WorldWind.Vec2(0, 1)]
        ];
	polygon5.extrude = false;
	polygonLayer.addRenderable(polygon5);

	var polygon6 = new WorldWind.Polygon(boundaries, polygonAttributes);
	polygon6.textureCoordinates = [
            [new WorldWind.Vec2(0, 0), new WorldWind.Vec2(1, 0), new WorldWind.Vec2(1, 1), new WorldWind.Vec2(0, 1)]
        ];
	polygon6.extrude = false;
	polygonLayer.addRenderable(polygon6);

	var polygon7 = new WorldWind.Polygon(boundaries, polygonAttributes);
	polygon7.textureCoordinates = [
            [new WorldWind.Vec2(0, 0), new WorldWind.Vec2(1, 0), new WorldWind.Vec2(1, 1), new WorldWind.Vec2(0, 1)]
        ];
	polygon7.extrude = false;
	polygonLayer.addRenderable(polygon7);

	var polygon8 = new WorldWind.Polygon(boundaries, polygonAttributes);
	polygon8.textureCoordinates = [
            [new WorldWind.Vec2(0, 0), new WorldWind.Vec2(1, 0), new WorldWind.Vec2(1, 1), new WorldWind.Vec2(0, 1)]
        ];
	polygon8.extrude = false;
	polygonLayer.addRenderable(polygon8);


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
	
	var myVar = setInterval(myTimer, 100);

	function myTimer() {
		//console.log(lat);
		lat+=0.15;
		long+=0.15;
		lat2-=0.15;
		long2-=0.15;
		lat3+=0.15;
		long3-=0.15;
		lat4-=0.15;
		long4+=0.15;
		lat5-=0.15;
		long5+=0.15;
		lat6+=0.15;
		long6+=0.15;
		lat7-=0.15;
		long7-=0.15;
		lat8+=0.15;
		long8-=0.15;
		var boundaries = [];
		boundaries.push(new WorldWind.Position(lat-0.5, long-0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat-0.5, long+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat+0.5, long+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat+0.5, long-0.5, 200000.0));
		polygon.boundaries=boundaries;
		boundaries = [];
		boundaries.push(new WorldWind.Position(lat2-0.5, long2-0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat2-0.5, long2+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat2+0.5, long2+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat2+0.5, long2-0.5, 200000.0));
		polygon2.boundaries=boundaries;
		boundaries = [];
		boundaries.push(new WorldWind.Position(lat3-0.5, long3-0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat3-0.5, long3+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat3+0.5, long3+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat3+0.5, long3-0.5, 200000.0));
		polygon3.boundaries=boundaries;
		boundaries = [];
		boundaries.push(new WorldWind.Position(lat4-0.5, long4-0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat4-0.5, long4+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat4+0.5, long4+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat4+0.5, long4-0.5, 200000.0));
		polygon4.boundaries=boundaries;
		boundaries = [];
		boundaries.push(new WorldWind.Position(lat5-0.5, long5-0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat5-0.5, long5+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat5+0.5, long5+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat5+0.5, long5-0.5, 200000.0));
		polygon5.boundaries=boundaries;
		boundaries = [];
		boundaries.push(new WorldWind.Position(lat6-0.5, long5-0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat6-0.5, long5+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat6+0.5, long5+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat6+0.5, long5-0.5, 200000.0));
		polygon6.boundaries=boundaries;
		boundaries = [];
		boundaries.push(new WorldWind.Position(lat7-0.5, long7-0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat7-0.5, long7+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat7+0.5, long7+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat7+0.5, long7-0.5, 200000.0));
		polygon7.boundaries=boundaries;
		boundaries = [];
		boundaries.push(new WorldWind.Position(lat8-0.5, long8-0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat8-0.5, long8+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat8+0.5, long8+0.5, 200000.0));
		boundaries.push(new WorldWind.Position(lat8+0.5, long8-0.5, 200000.0));
		polygon8.boundaries=boundaries;

		wwd.redraw();
	}

    }
</script>
</body>
</html>
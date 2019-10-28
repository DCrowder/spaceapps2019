//var satellite = require('satellite.js');
//var getTLE = require('getTLE.js');

const tle =  {"info":{"satid":40059,"satname":"OCO 2","transactionscount":72},"tle":"1 40059U 14035A   19298.85454994 +.00000009 +00000-0 +12049-4 0  9997\r\n2 40059 098.2059 237.8897 0001240 078.8270 281.3067 14.57115237282719"}  

// You can get ECF, Geodetic, Look Angles, and Doppler Factor.
function parseTle(tleObj) {
	try{
	var tleString = JSON.stringify(tleObj.tle);
	//console.log(tleString);
	var line2index = tleString.indexOf('\\n2 ') + 2;
	var tleLine1 = tleString.substring(1, line2index - 4);
	var tleLine2 = tleString.substring(line2index, tleString.length-1);

	//console.log(tleLine2);
	return [tleLine1, tleLine2];
	}catch{
		return 0;
	}
}

function tle2geo(tle){
	try{
	var tleStrings = parseTle(tle);
	var tleLine1 = tleStrings[0];
	var tleLine2 = tleStrings[1];
	
	// Initialize a satellite record
	var satrec = satellite.twoline2satrec(tleLine1, tleLine2);

	var time = new Date();
	//Propagate satellite using time since epoch (in mins).
	var positionAndVelocity = satellite.propagate(satrec, time); // Fix for the proper time

	// The position, velocity result is a key-value pair of ECI coords.
	// These are the base results from which all other coords are derived.
	var positionEci = positionAndVelocity.position,
	    velocityEci = positionAndVelocity.velocity;

	// Set the Observer at 122.03 West by 36.96 North, in RADIANS
	var observerGd = {
	    longitude: satellite.degreesToRadians(-122.0308),
	    latitude: satellite.degreesToRadians(36.9613422),
	    height: 0.370
	}

	// You will need GMST for some of the coordinate transforms. Sidereal time
	var gmst = satellite.gstime(time);

	var positionGd = satellite.eciToGeodetic(positionEci, gmst);

	return positionGd;
	}catch{
		return 0;
	}
}


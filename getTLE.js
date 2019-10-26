/*	getTLE.js
	inputs: satellite to be requested
	outputs: TLE of input satellite

*/

var baseURL = 'https://www.space-track.org/';
var controller = 'basicspacedata';
var satQuery = '/query/class/tle_latest/ORDINAL/1/orderby/NORAD_CAT_ID asc/limit/5/metadata/true/';

var str = '';
var satSite = str.concat(baseURL, controller, satQuery);

function getTleJson() {
	const tleJson = async () => {
		// Request TLE
		const response = await fetch(satSite);
		const myJson = await response.json();
		console.log(JSON.stringify(myJson));
}
	return tleJson;
}



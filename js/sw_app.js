let button 		= document.querySelector('#button');
let name 		= document.querySelector('#name');
let height 		= document.querySelector('#height');
let mass 		= document.querySelector('#mass');
let birthYear 	= document.querySelector('#birth-year');

console.log(character);

// Initialize the HTTP request.
function getInfo(){

	var character 	= document.getElementById("character").value;
	var url = 'https://swapi.dev/api/people/?search=' + character;

	var xhr = new XMLHttpRequest();
	xhr.open('GET', url);

	// Track the state changes of the request.
	xhr.onreadystatechange = function () {
		var DONE = 4; // readyState 4 means the request is done.
		var OK = 200; // status 200 is a successful return.
		if (xhr.readyState === DONE) 
		{
			if (xhr.status === OK) 
			{
				var data = JSON.parse(xhr.responseText);
				showInfo(data);
			} 
			else 
			{
				console.log('Error: ' + xhr.status); // An error occurred during the request.
			}
		}
	};
	xhr.send(null);
}



function showInfo(data) {
	name.innerText 		= data.results[0].name;
	height.innerText 	= data.results[0].height;
	mass.innerText 		= data.results[0].mass;
	birthYear.innerText = data.results[0].birth_year;
}

button.addEventListener('click', getInfo);
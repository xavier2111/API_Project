let button 		= document.querySelector('#button');
let name 		= document.querySelector('#name');
let height 		= document.querySelector('#height');
let mass 		= document.querySelector('#mass');
let birthYear 	= document.querySelector('#birth-year');


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
				showInfo1(data);
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
	for (var i = 0; i < data.results.length; i++) {		
		name.innerText 		= data.results[i].name;
		height.innerText 	= data.results[i].height;
		mass.innerText 		= data.results[i].mass;
		birthYear.innerText = data.results[i].birth_year;

	}
	
}




function showInfo1(data) {
	if ($("#character-info").length > 0)
	{	
  		var list = document.getElementById("character-info");
		list.parentNode.removeChild(list);
	} else{
		console.log("jojo");
	}

	var container = $("<div>").addClass("info-container").appendTo(".characters");
  	var text = "Hello World!";
  	var blockDiv;  // used in the for loop

	for (var i = 0; i < data.results.length; i++) {		
		// name.innerText 		= data.results[i].name;
		// height.innerText 	= data.results[i].height;
		// mass.innerText 		= data.results[i].mass;
		// birthYear.innerText = data.results[i].birth_year;
		blockDiv = $("<div>").attr('id',"character-info").addClass("character-info").appendTo(container);
    	$('<h1>').text(data.results[i].name).appendTo(blockDiv);
    	$('<p>').text("lengte: " 		+ 		data.results[i].height).appendTo(blockDiv);
    	$('<p>').text("gewicht: " 		+ 	data.results[i].mass).appendTo(blockDiv);
    	$('<p>').text("geboorte jaar: " + 	data.results[i].birth_year).appendTo(blockDiv);
    	$('<br>').appendTo(blockDiv);
	}
	
}
button.addEventListener('click', getInfo);
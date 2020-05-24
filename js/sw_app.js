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


	xhr.onreadystatechange = function () {
		var DONE = 4;
		var OK = 200;
		if (xhr.readyState === DONE) 
		{
			if (xhr.status === OK) 
			{
				var data = JSON.parse(xhr.responseText);
				showInfo1(data);
			} 
			else 
			{
				console.log('Error: ' + xhr.status);
			}
		}
	};
	xhr.send(null);
}


function showInfo1(data) {
	//Remove characters if present.
	if ($("#character-info").length > 0)
	{	
		var list = document.getElementById("info-container");
		list.parentNode.removeChild(list);
	}
	
	var container = $("<div>").attr('id',"info-container").addClass("info-container").appendTo(".characters");
  	var blockDiv;

  	//Create div for every character found.
	for (var i = 0; i < data.results.length; i++) 
	{		
		blockDiv = $("<div>").attr('id',"character-info").addClass("character-info").appendTo(container);

    	$('<h1>').text(data.results[i].name).appendTo(blockDiv);
    	$('<p>').text("lengte: " 		+ 		data.results[i].height).appendTo(blockDiv);
    	$('<p>').text("gewicht: " 		+ 	data.results[i].mass).appendTo(blockDiv);
    	$('<p>').text("geboorte jaar: " + 	data.results[i].birth_year).appendTo(blockDiv);
    	$('<br>').appendTo(container);
	}
	
}
button.addEventListener('click', getInfo);
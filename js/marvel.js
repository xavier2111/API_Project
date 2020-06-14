function getInfo(){

	var timestamp = 1 ;
	var key = md5cycle('68a39d879e5e19e0bd8b140b4b5a6a70', 1);
	console.log(key);
	var url = 'https://gateway.marvel.com/v1/public/comics?ts=' + timestamp + '&apikey=' + key;

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
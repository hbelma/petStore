var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija
		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("polje").innerHTML = ajax.responseText;

			var script = document.createElement('script');
			script.onload = function() {};
			script.src = "contact.js";
			document.getElementsByTagName('head')[0].appendChild(script);


		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("polje").innerHTML = "Greska: nepoznat URL";
		

	}
	function Prikazi(naziv){
	ajax.open("GET", naziv, true);
	ajax.send();
	return false;
	}

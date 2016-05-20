function loadArticle(){
	
	vorname = false;
	nachname = false;
	adresse = false;
	hausnummer = false;
	place = false;
	postleitzahl = false;
	usern = false;
	em = false;
	pw = false;

	

	if(vorname == true && nachname == true && adresse == true && hausnummer == true && place == true && postleitzahl == true){
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				Weiterleitung =	xmlhttp.responseText;
				alert(Weiterleitung);
				window.location = '?p=myProfile.php';
			}
		}
		xmlhttp.open("POST","verteiler.php?aktion=3",true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("vorname="+prename+"&nachname="+aftername+"&adresse="+adress+"&hausnummer="+num+"&ort="+ort+"&postleitzahl="+plz+"&username="+user+"&mail="+email+"&password="+word);
	}
}
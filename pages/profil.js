function sendProfile(){
	prename = document.getElementById('vorn').value;
	aftername = document.getElementById('nachn').value;
	adress = document.getElementById('adress').value;
	num = document.getElementById('number').value;
	ort = document.getElementById('place').value;
	plz = document.getElementById('plz').value;
	username = document.getElementById('user').value;
	mail = document.getElementById('email').value;
	password = document.getElementById('word').value;
	password2 = document.getElementById('word2').value;
	
	/*fPrename = document.getElementById('fprename');
	fAftername = document.getElementById('faftername');
	fAdress = document.getElementById('fadress');
	fNumber = document.getElementById('fnumber');
	fOrt = document.getElementById('fort');
	fPLZ = document.getElementById('fplz');*/
	
	vorname = false;
	nachname = false;
	adresse = false;
	hausnummer = false;
	place = false;
	postleitzahl = false;
	usern = false;
	em = false;
	pw = false;

	if(password == password2){
		pw = true;
	}
	else if (password == "") {
		pw = false;
	}
	else {
	pw = false;
	};

	
	if(prename == ''){
		/*fprename.hidden = false;
		fPrename.innerHTML = 'Sie m&uuml;ssen Ihren Vornamen angeben';*/
	}
	else{
		if(String(prename)){
			/*fPrename.innerHTML = 'Ok';*/
			vorname = true;
		}
		else{
			//fprename.innerHTML = 'Der Vorname muss ein darf nur Buchstaben beinhalten';
		}
	}
	
	if(aftername == ''){
		//fAftername.innerHTML = 'Sie m&uuml;ssen Ihren Nachnamen angeben';
	}
	else{
		if(String(aftername)){
			//fAftername.innerHTML = 'Ok';
			nachname = true;
		}
		else{
			//fAftername.innerHTML = 'Der Nachname darf nur Buchstaben beinhalten';
		}
	}
	
	if(adress == ''){
		//fAdress.innerHTML = 'Sie m&uuml;ssen Ihre Adresse angeben';
	}
	else{
		if(String(adress)){
			//fAdress.innerHTML = 'Ok';
			adresse = true;
		}
		else{
			//fAdress.innerHTML = 'Die Adresse dar nur Buchstaben beinhalten';
		}
	}
	
	if(num == ''){
		//fNumber.innerHTML = 'Sie m&uuml;ssen Ihre Hausnummer angeben';
	}
	else{
		if(Number(num)){
		//	fNumber.innerHTML = 'Ok';
			hausnummer = true;
		}
		else{
			//fnumber.innerHTML = 'Die Postleizahl muss eine Zahl sein';
		}
	}
	
	if(ort == ''){
	//	fOrt.innerHTML = 'Sie m&uuml;ssen Ihren Wohnort angeben';
	}
	else{
		if(String(ort)){
		//	fOrt.innerHTML = 'Ok';
			place = true;
		}
		else{
			//fOrt.innerHTML = 'Der Ort darf nur Buchstaben beinhalten';
		}
	}
	
	if(plz == ''){
		//fPLZ.innerHTML = 'Sie m&uuml;ssen Ihre Postleitzahl angeben';
	}
	else{
		if(Number(plz)){
		//	fPLZ.innerHTML = 'Ok';
			postleitzahl = true;
		}
		else{
		//	fPLZ.innerHTML = 'Die Hausnummer muss eine Zahl sein';
		}
	}

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
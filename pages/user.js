function login(){
	name = document.getElementById('user').value;
	password = document.getElementById('pass').value;
	if(name != '' && password != ''){
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				Weiterleitung =	xmlhttp.responseText;
				if(Weiterleitung == 1){
					window.location = "?p=myProfile";
				}
				else{
					//log_fail();
					alert("Fehler")
				}
			}
		}
		xmlhttp.open("POST","verteiler.php?aktion=1",true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("user="+name+"&pass="+password);
	}
	else{
		//log_fail();
		alert("Fehler")
	}
}

/*function log_fail(){
	document.getElementById('LogFehler').innerHTML = "Ihre Logindaten sind nicht korrekt";
	document.getElementById('LogFehler').style.color = "#f00";
}*/

function register(){
	vorn = document.getElementById('vor').value;
	nachn = document.getElementById('nach').value;
	username = document.getElementById('user').value;
	pass1 = document.getElementById('passwd').value;
	pass2 = document.getElementById('passwd2').value;
	mail = document.getElementById('email').value;
	
	/*fname = document.getElementById('f_name');
	fpass1 = document.getElementById('f_pass1');
	fpass2 = document.getElementById('f_pass2');
	fmail = document.getElementById('f_mail');
	vorn = document.getElementById('vorn');
	nachn = document.getElementById('nachn');
	username = document.getElementById('user');
	pass1 = document.getElementById('passwd');
	pass2 = document.getElementById('passwd2');
	mail = document.getElementById('email');*/
	
	pVorn = false;
	pNachn = false;
	pName = false;
	pPass1 = false;
	pPass2 = false;
	pMail = false;
	Pat = false;
	Pot = false;
	
	buchstabe = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	
	green ='#090';
	red = '#f00';
	//Namensüberprüfung
	if(nach.value != ''){
		if(nach.value.length >= 3 && nach.value.length <= 10){
			for(i = 0; i < nach.value.length; i++){
				if(buchstabe.indexOf(nach.value.charAt(i)) >= 0){
					//fname.innerHTML = "Ok";
					//fname.style.color = green;
					pNachn =  true;
				}	
				else{
					//fname.innerHTML = 'Der Benutzername darf nur aus Grossbuchstaben, Kleinbuchstaben und Zahlen bestehen';
					//fname.style.color = red;
					break;

				}
			}
		}
		else{
			//fname.innerHTML = "Der Benutzernaem muss zwischen 3 und 10 Zeichen lang sein";
			//fname.style.color = red;
		}
	}else{
		//fname.innerHTML = 'Sie m&uuml;ssen einen Benutzernamen angeben';
		//fname.style.color = red;
	}
	
	if(vor.value != ''){
		if(vor.value.length >= 3 && vor.value.length <= 10){
			for(i = 0; i < vor.value.length; i++){
				if(buchstabe.indexOf(vor.value.charAt(i)) >= 0){
					//fname.innerHTML = "Ok";
					//fname.style.color = green;
					pVorn =  true;
				}	
				else{
					//fname.innerHTML = 'Der Benutzername darf nur aus Grossbuchstaben, Kleinbuchstaben und Zahlen bestehen';
					//fname.style.color = red;
					break;
				}
			}
		}
		else{
			//fname.innerHTML = "Der Benutzernaem muss zwischen 3 und 10 Zeichen lang sein";
			//fname.style.color = red;
		}
	}else{
		//fname.innerHTML = 'Sie m&uuml;ssen einen Benutzernamen angeben';
		//fname.style.color = red;
	}
	
	if(username.value != ''){
		if(user.value.length >= 3 && user.value.length <= 10){
			for(i = 0; i < user.value.length; i++){
				if(buchstabe.indexOf(user.value.charAt(i)) >= 0){
					//fname.innerHTML = "Ok";
					//fname.style.color = green;
					pName =  true;
				}	
				else{
					//fname.innerHTML = 'Der Benutzername darf nur aus Grossbuchstaben, Kleinbuchstaben und Zahlen bestehen';
					//fname.style.color = red;
					break;
				}
			}
		}
		else{
			//fname.innerHTML = "Der Benutzernaem muss zwischen 3 und 10 Zeichen lang sein";
			//fname.style.color = red;
		}
	}else{
		//fname.innerHTML = 'Sie m&uuml;ssen einen Benutzernamen angeben';
		//fname.style.color = red;
	}
	//passwort überprüfung
	if(pass1.value != ''){
		if(passwd.value.length >= 6 && passwd.value.length <= 12){
			//fpass1.innerHTML = 'Ok';
			//fpass1.style.color = green;
			pPass1 = true;
		}
		else{
			//fpass1.innerHTML = 'Das Passwort muss zwischen 6 und 10 Zeichen Lang sein';
			//fpass1.style.color = red;
		}
	}
	else{
		//fpass1.innerHTML = 'Sie m&uuml;ssen ein Passwort angeben';
		//fpass1.style.color = red;
	}
	//Passwortwiederholung überprüfung
	if(passwd2.value != ''){
		if(passwd2.value == passwd.value){
			//fpass2.innerHTML = 'Ok'
			//fpass2.style.color = green;
			pPass2 = true;
		}
		else{
			//fpass2.innerHTML = 'Die Passw&ouml;rter stimmen nicht &uuml;berein';
			//fpass2.style.color = red;
		}
	}else{
		//fpass2.innerHTML = 'Sie m&uuml;ssen das Passwort wiederholen';
		//fpass2.style.color = red;
	}
	//EMail überprüfung
	at = '@';
	dot = '.';
	if(email.value != ''){
		
		for(j = 0; j <= (email.value.length -1); j++){
			if(at.indexOf(email.value.charAt(j)) > -1){
				Pat = true;
				break;
			}
		}

		for(k = 0; k <= (email.value.length -1); k++){
			if(dot.indexOf(email.value.charAt(k)) > -1){
				Pot = true;
				break;
			}
		}
		
		if(Pot == true && Pat == true){
			//fmail.innerHTML = 'Ok';
			//fmail.style.color = green;
			pMail = true;
		}else{
			//fmail.innerHTML = 'Diese E-Mail Adresse ist ungültig';
			//fmail.style.color = red;
		}
	}
	else{
		//fmail.innerHTML = 'Sie m&uuml;ssen eine E-Mail Adresse angeben';
		//fmail.style.color = red;
	}
	//überprüfung
	if(pName == true && pPass1 == true && pPass2 == true && pMail == true){
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				Weiterleitung =	xmlhttp.responseText;
				if(Weiterleitung == 11111){
					alert("Sie haben sich erfolgreich registriert");
					window.location = "?p=myProfile.php";
				}
				
				if(Weiterleitung == 11110){
					alert("Dieser Benutzername oder Email existiert bereits");
				}
			}
		}
		//PHP übergabe

		xmlhttp.open("POST","verteiler.php?aktion=2",true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("vor="+vorn+"&nach="+nachn+"&user="+username+"&passwd="+pass1+"&passwd2="+pass2+"&email="+mail);
	}
	else{
		
	}
}
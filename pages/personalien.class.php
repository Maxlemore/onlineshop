	<?php
		class personalien{
			function __construct($mysqli){
				$this->db = $mysqli;
			}
			
			function is_string($probe){
				if(ctype_alpha($probe)){
					return true;
				}
				else{
					return false;
				}
			}
			
			function is_number($probe){
				if(ctype_digit($probe)){
					return true;
				}
				else{
					return false;
				}
			}
			
			function db_write($vorname,$nachname,$adresse,$hausnummer,$postleitzahl,$ort,$user,$mail,$password,$username){
				$probe = $this->db->query("SELECT * FROM person WHERE ID = (SELECT ID FROM user WHERE user = '$username')")or die($this->db->error);
				if($probe->num_rows == 0){
					$this->db->query("INSERT INTO person (ID,Benutzername,Vorname,Nachname,EMail) VALUES ((SELECT ID FROM person WHERE Benutzername = '$username'),'$vorname','$nachname','$mail')")or die($this->db->error);
					$this->db->query("INSERT INTO adresse (BenutzerID,Addresse,Hausnr,Plz,Ort) VALUES ((SELECT ID FROM person WHERE Benutzername = '$username'),'$adresse','$hausnummer','$plz','$ort')")or die($this->db->error);
					return true;
				}
				else{
					$this->db->query("UPDATE person set Nachname='$nachname',Vorname='$vorname',Benutzername='$user',EMail=$mail WHERE BenutzerID=(SELECT BenutzerID FROM benutzer WHERE user='$username');")or die($this->db->error);
					$this->db->query("UPDATE adresse set Addresse='$adresse',Hausnr='$hausnummer',Plz='$postleitzahl',Ort=$ort WHERE BenutzerID=(SELECT BenutzerID FROM benutzer WHERE user='$username');")or die($this->db->error);
					return true;
				}
			}
			
			function read_db($username){
				$personalie = $this->db->query("SELECT * from profiles WHERE uid = (SELECT uid FROM user WHERE name = '$username')")or die($this->db->error);
				if($personalie->num_rows == 1){
					$personalien = $personalie->fetch_object();
					
					$this->name = $personalien->name;
					$this->vorname = $personalien->vorname;
					$this->strasse = $personalien->strasse;
					$this->nr = $personalien->nr;
					$this->ort = $personalien->ort;
					$this->plz = $personalien->plz;
					$this->button = 'Personalien &auml;dern';
					return true;
				}
				else{
					$this->name = '';
					$this->vorname = '';
					$this->strasse = '';
					$this->nr = '';
					$this->ort = '';
					$this->plz = '';
					$this->button = 'Personalien eintragen';
					return false;
				}
			}
		}
	?>
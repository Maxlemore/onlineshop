<?php
	class bewertung{
		function __construct($mysqli){
			$this->db = $mysqli;
		}
		
		function read_db(){
			$kategorien = $this->db->query("SELECT * FROM kategorie ORDER BY katId")or die($this->db->error);
			$zahl = $this->db->query("SELECT COUNT(*) as zahl FROM kommentare")or die($this->db->error);
			$zahl = $zahl->fetch_object();
			$zahl = rand(0,($zahl->zahl -1));
			$kommentare = $this->db->query("SELECT * FROM kommentare")or die($this->db->error);
			if($kommentare->num_rows < 0){
				$i = 0;
				while($kommentar = $kommentare->fetch_object()){
					$nachrichten[$i] = $kommentar->kommentar;
					$user[$i] = $kommentar->uid;
					$i++;
				}
				$this->nachricht = $nachrichten[$zahl];
				$benutzer = $user[$zahl];
				$benutzer = $this->db->query("SELECT name FROM user WHERE uid = '$benutzer'")or die($this->db->error);
				$benutzer = $benutzer->fetch_object();
				$this->user = $benutzer->name;
			}
			else{
				$this->nachricht = 'Noch keine Kommentare vorhanden';
				$this->user = '';
			}
			$i = 0;
			if($kategorien->num_rows > 0){
				while($kategorie = $kategorien->fetch_object()){
					$this->kategorie[$i] = $kategorie->name;
					$this->katId[$i] = $kategorie->katId;
					$i++;
				}
				return true;
			}
			else{
				return false;
			}
		}
		
		function set_value(){
			$value = $this->db->query("SELECT * FROM bewertung katId ORDER BY katId")or die($this->db->error);
			$i = 0;
			if($value->num_rows > 0){
				while ($values = $value->fetch_object()){
					if($values->zahl != 0){
						$this->prozent[$i] = ($values->zahl /($values->bewertungen * 5))*100;
						$this->kid[$i] = $values->katId;
						$i++;
					}
					else{
						return false;
					}
				}
				return true;
			}
			else{
				return false;
			}
		}
		
		function write_db($kat1,$kat2,$kat3,$kat4,$username,$kommentar){
			$kategorien = array($kat1,$kat2,$kat3,$kat4);
			$vorhanden = $this->db->query("SELECT * FROM bewertung order by katId asc")or die($this->db->error);
			$i = 0;
			while($bisher = $vorhanden->fetch_object()){
				$this->katid[$i] = $bisher->katId;
				$this->bewertungen[$i] = $bisher->bewertungen;
				$this->zahl[$i] = $bisher->zahl;
				$i++;
			}
			
			for($b = 0; $b <=3; $b++){
				if($kommentar == ''){
					$bewertung = ($this->bewertungen[$b] + 1);
					$zahl = ($this->zahl[$b] + $kategorien[$b]);
					$katId = $this->katid[$b];
					$this->db->query("UPDATE bewertung set bewertungen = $bewertung , zahl = $zahl where katId = $katId ")or die($this->db->error);
					$this->db->query("UPDATE user set bewertet = 1 WHERE name = '$username'") or die($this->db->error);
					$_SESSION['bewertet'] = 1;
				}
				elseif($kat1 == 0 && $kat2 == 0 && $kat3 == 0 && $kat4 == 0 && $kommentar != ''){
					$this->db->query("INSERT INTO kommentare (uid,kommentar) values ((SELECT uid FROM user WHERE name = '$username'),'$kommentar')")or die($this->db->error);
					$this->db->query("UPDATE user SET kommentiert = 1 where name = '$username'")or die($this->db->error);
					$_SESSION['kommentiert'] = 1;
					
				}
				else{
					$bewertung = ($this->bewertungen[$b] + 1);
					$zahl = ($this->zahl[$b] + $kategorien[$b]);
					$katId = $this->katid[$b];
					$this->db->query("UPDATE bewertung set bewertungen = $bewertung , zahl = $zahl where katId = $katId ")or die($this->db->error);
					$this->db->query("UPDATE user set bewertet = 1 WHERE name = '$username'") or die($this->db->error);
					$this->db->query("INSERT INTO kommentare (uid,kommentar) values ((SELECT uid FROM user WHERE name = '$username'),'$kommentar')");
					$this->db->query("UPDATE user SET kommentiert = 1 where name = '$username'")or die($this->db->error);
					$_SESSION['bewertet'] = 1;
					$_SESSION['kommentiert'] = 1;
				}
			}
			$_SESSION['bewertet'] = 1;
			return true;
		}
	}
?>
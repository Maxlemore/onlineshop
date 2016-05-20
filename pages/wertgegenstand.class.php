<?php
	class wertgegenstand{
		function __construct($mysqli){
			$this->db = $mysqli;
		}
		
		
		function db_read(){
			$gegenstaende = $this->db->query("SELECT * FROM gegenstand")or die($this->db->error);
			//$kategorie = $this->db->query("SELECT * FROM kategorie WHERE ID = (SELECT ID FROM interne verbindung kategorie WHERE GegenstandID = KategorieID)")or die($this->db->error);
			//$künstler = $this->db->query("SELECT * FROM künstler WHERE ID = (SELECT ID FROM interne verknüpfung künstler WHERE GegenstandID = KünstlerID)")or die($this->db->error);
			//$farbe = $this->db->query("SELECT * FROM farbe WHERE ID = (SELECT ID FROM verbindung WHERE GegenstandID = FarbID)")or die($this->db->error);
			$bild = $this->db->query("SELECT * FROM bild /*WHERE ID = (SELECT ID FROM interne beziehung bild WHERE GegenstandID = BildID)*/")or die($this->db->error);
			$i = 0;
			$o = 0;
			if($gegenstaende->num_rows > 0){
				while($gegenstand = $gegenstaende->fetch_object()){
					$this->gid[$i] = $gegenstand->gid;
					$this->wertgegenstand[$i] = $gegenstand->Gegenstandsname;
					$this->höhe[$i] = $gegenstand->Gegenstandshöhe;
					$this->breite[$i] = $gegenstand->Gegenstandsbreite;
					$this->tiefe[$i] = $gegenstand->Gegenstandstiefe;
					$this->anzahl[$i] = $gegenstand->Anzahl;
					$this->description[$i] = $gegenstand->Beschreibung;
					$i++;
				}
			}
			else if($bild->num_rows > 0){
				while($bilder = $bild->fetch_object()){
					$this->bild[$o] = $bilder->Image;
					$o++;
				}
			}
			else{
				return false;
			}
		}
	}
?>
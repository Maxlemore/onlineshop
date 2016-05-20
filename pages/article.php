<?php
session_start();
require_once("wertgegenstand.class.php");
require_once("db_connect.php");
?>
<ul id= "auswahl">
	<li class="col-lg-2"><a href="?p=article&d=all">Gesamt</a></li>
	<li class="col-lg-2"><a href="?p=article&d=furniture">M&ouml;bel</a></li>
	<li class="col-lg-2"><a href="#">Gem&auml;lde</a></li>
	<li class="col-lg-2"><a href="#">Allerlei</a></li>
	<li class="col-lg-2"><a href="#">Besonderes</a></li>
	<li class="col-lg-2" ><a href="#"><input class="col-lg-12" id="search" name="search" placeholder="Search" type="search" ></a></li>
</ul> 
<div class= "col-lg-12 uebersicht">
	<?php
		$w = new wertgegenstand($mysqli);
		$w->db_read();										?>
	<?php
		if(isset($w->gid)){
		$yes1 = false;
		foreach($w->gid as $dontCare){
		
	?>
		<div class="artikel" id="ArtikelTitel"><h2 class="artikel-inside"><?php echo $w->wertgegenstand[$i];?></h2>
			<img class="article-img" src="<?php echo $w->bild[$o];?>" alt="Sofa" id="article-img">
			<div class="description" id="description"><p><?php echo $w->description[$i];?></p></div>
		</div>
	<?php
		}
	}
		
	?>
	
</div>

<!DOCTYPE html>

<head>
	<meta name="Online Katalog" content="Online Katalog">
	<link rel="stylesheet" href="../script/styles.css">
	<link rel="Javascript" href="./javascript.js">
 </head>
<html>
	<body>
		<nav>
			<ul>
				<li><p class="logo">Silvias Vintage shop</p></li>
				<li><a href="?p=home">HOME</a></li>
				<li><a href="?p=article&d=all">Artikel</a></li>
				<li><a href="#">About US</a></li>
				<li class="login"><a href="?p=myProfile">my Profil</a></li>
				<li class="login"><a href="?p=login" >LogIn</a></li>
				<li class="icon login"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
			</ul>	
		</nav> 
		<div class="content">
		<?php 
			if(isset($_GET['p'])|| isset($_GET['d'] )){
				$p = $_GET['p'];
				switch($p){
					case 'home' :{
						require_once("home.php");
						break;
						}
					
					case 'article' :{
						require_once("article.php");
						break;
					}
					case 'myProfile' :{
						require_once("profil.php");
						break;
					}
					case 'login' :{
						require_once("login.php");
						break;
					}
					
					case 'register' :{
						require_once("register.php");
						break;
					}
					
					default: {}
					}
			}
			else{ 
					require_once("home.php");
				}
		?>
		</div>

		
		<footer>
			<div class="footer">
				<h4 class="gap">Silvia Sager</h4>
				<p class="gap">Erlach unter den Halden 12</p>
				<p class="gap"><b>ACHTUNG!</b> Alle Artikel die auf dieser Seite ausgestellt sind <b>unter Vorbehalt!</b></p>
			</div>
		</footer>
	</body>
</html>
<div class="col-lg-12 form-form">
	
	<form class="" name="frmReg"  id="FormR">
    <script type="text/javascript" src="user.js"> </script>
  <fieldset>
    <h2 class="logo">Profil</h2>
	
	
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2">Vorname</label>
      <div class="col-lg-11">
        <input class="form-control" id="vor" name="vor" placeholder="Vorname" type="text" >
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  ">Nachname</label>
      <div class="col-lg-11">
        <input class="form-control" id="nach" name="nach" placeholder="Nachname" type="text" >
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  ">Benutzername</label>
      <div class="col-lg-11">
        <input class="form-control" id="user" name="user" placeholder="Benutzername" type="text" title="Der Benutzername muss genau 6 Zeichen lang sein und darf keine Sonderzeichen beinhalten.">
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  ">Email</label>
      <div class="col-lg-11">
        <input class="form-control" id="email" name="email" placeholder="Email" type="text">
      </div>
    </div>
	<div class="form-group">
      <label for="password" class="col-lg-2  ">Passwort</label>
      <div class="col-lg-11">
        <input class="form-control" id="passwd" name="word" placeholder="Password" type="password">
      </div>
    </div>
	<div class="form-group">
	<label for="passworta" class="col-lg-2  ">Passwort wiederholung</label>
      <div class="col-lg-11">
        <input class="form-control" id="passwd2" name="wordagain" placeholder="Password" type="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-11">
        <input type="reset" value="Cancel">
        <input type="button" value="Submit" onclick="register();"/>
      </div>
    </div>
  </fieldset>
  </form>
  
  
	 
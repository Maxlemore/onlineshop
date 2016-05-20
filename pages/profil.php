<div class="col-lg-12 form-form">
	
	<form class="" name="frmReg">
  <script type="text/javascript" src="profil.js"> </script>
  <fieldset>
    <h2 class="logo">my Profil</h2>
	
	
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2 center"><i>Vorname</i></label>
      <div class="col-lg-11">
        <input class="form-control edit" id="vorn" name="vorn" placeholder="Vorname" type="text" >
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  center"><i>Nachname</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="nachn" name="nachn" placeholder="Nachname" type="text" >
      </div>
    </div>
  <div class="form-group">
      <label for="inputEmail" class="col-lg-2  center"><i>Adresse</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="adress" name="adress" placeholder="Adresse" type="text" >
      </div>
    </div>
  <div class="form-group">
      <label for="inputEmail" class="col-lg-2  center"><i>Hausnummer</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="number" name="number" placeholder="Hausnummer" type="text" >
      </div>
    </div>
  <div class="form-group">
      <label for="inputEmail" class="col-lg-2  center"><i>Ort</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="place" name="place" placeholder="Ort" type="text" >
      </div>
    </div>
  <div class="form-group">
      <label for="inputEmail" class="col-lg-2  center"><i>Postleitzahl</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="plz" name="plz" placeholder="Postleitzahl" type="text" >
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  center"><i>Benutzername</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="user" name="user" placeholder="Benutzername" type="text" title="Der Benutzername muss genau 6 Zeichen lang sein und darf keine Sonderzeichen beinhalten.">
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2  center"><i>Email</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="email" name="email" placeholder="EMail" type="text">
      </div>
    </div>
	<div class="form-group">
      <label for="password" class="col-lg-2  center"><i>Passwort</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="word" name="word" placeholder="Passwort" type="password">
      </div>
      <label for="password" class="col-lg-2  center"><i>Passwort wiederholung</i></label>
      <div class="col-lg-11 ">
        <input class="form-control edit" id="word2" name="word2" placeholder="Passwort" type="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-11">
        <input type="reset" value="Cancel">
        <input type="button" value="submit" onclick="sendProfile();">
      </div>
    </div>
  </fieldset>
  </form>
  
 	
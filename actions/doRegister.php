<?php
include ("../common/common.php");
include ('../mailSender/htmlMimeMail.php');

$conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
mysql_select_db(DATABASE);

$nome = "";
$cognome = "";
$email = "";
$telefono = "";
$regione = "";
$provincia = "";
$nazione = "";
$indirizzo = "";
$posizione = "";
$password = "";

if(isset($_POST["nome"])) $nome = htmlspecialchars($_POST["nome"]);
if(isset($_POST["cognome"])) $cognome = htmlspecialchars($_POST["cognome"]);
if(isset($_POST["email"])) $email = htmlspecialchars($_POST["email"]);
if(isset($_POST["telefono"])) $telefono = htmlspecialchars($_POST["telefono"]);
if(isset($_POST["provincia"])) $provincia = htmlspecialchars($_POST["provincia"]);
if(isset($_POST["nazione"])) $nazione = htmlspecialchars($_POST["nazione"]);
if(isset($_POST["indirizzo"])) $indirizzo = htmlspecialchars($_POST["indirizzo"]);
if(isset($_POST["posizione"])) $posizione = htmlspecialchars($_POST["posizione"]);
if(isset($_POST["password_registrati"])) $password = htmlspecialchars($_POST["password_registrati"]);
$lingua = $_SESSION['lingua'];
$codice = $random_number = mt_rand(1000000, 9999999);

if($email != "") {
    if(isset($_POST["regione"]) && $_POST["regione"] != "") {
	$sQuery = "SELECT * "
	." FROM regioni "
	." WHERE codice_istat = ".$_POST["regione"];
	
	$risultato = mysql_query($sQuery);
	$regione = mysql_result($risultato, 0, "regione");
    }
    
    $sQuery = "INSERT INTO utenti "
      ." (email, "
      ."  password, "
      ."  nome, "
      ."  cognome, "
      ."  telefono, "
      ."  indirizzo, "
      ."  ragione, "
      ."  provincia, "
      ."  nazione, "
      ."  posizione, "
      ."  cod_attivazione, "
      ."  lingua, "
      ."  stato) "
      ."  VALUES "
      ." ( '".$email."', "
      ."  '".$password."', "
      ."  '".$nome."', "
      ."  '".$cognome."', "
      ."  '".$telefono."', "
      ."  '".$indirizzo."', "
      ."  '".$regione."', "
      ."  '".$provincia."', "
      ."  '".$nazione."', "
      ."  '".$posizione."', "
      ."  '".$codice."', "
      ."  '".$lingua."', "
      ."  'false'); ";
      
    $risultato = mysql_query($sQuery);
    
    $sQuery = "SELECT "
	    ."   id,"
	    ."   email,"
	    ."   password"
	    ." FROM"
	    ."   utenti"
	    ." WHERE "
	    ."   email='".$email."'"
	    ." AND "
	    ."   password='".$password."'"
	    ." LIMIT 1";
    $result =  mysql_query($sQuery);
    
    if($risultato) {
	while ($row = mysql_fetch_assoc($result)) {
		$idUtenteRegistrato = $row['id'];
	}
	if($lingua == "it") {       
	  $mail = new htmlMimeMail();
	  $mail->setSubject("Registrazione sito Prof Office");
	  $mail->setHTML('La ringraziamo di essersi registrato al sito www.profoffice.it.<br>Le ricordiamo che i dati per accedere alla sezione login sono:<br>Email: ' . $email . '<br>Passoword: '. $password . '<br><br>Per attivare il tuo account e necessario verificare il tuo indirizzo di mail, ti preghiamo di premere nel seguente link: <a href="http://www.profoffice.it/activate.php?code='.$codice.'&id='.$idUtenteRegistrato.'&lingua='.$lingua.'">http://www.profoffice.it/activate.php?code='.$codice.'&id='.$idUtenteRegistrato.'&lingua='.$lingua.'</a><br><br><img src="http://www.profoffice.it/logoprofnuovo.gif"/><br>Prof s.r.l<br>via Cao de Villa 6/a<br>31020 Falze\' di Piave TV / ITALY<br>T+39 0438 903190 F+39 0438 903228 <br><br>La presente comunicazione e\' indirizzata esclusivamente ai destinatari della medesima qui indicati. Nel caso in cui abbiate ricevuto per errore la presente comunicazione, vogliate cortesemente darcene immediata notizia, rispondendo a questo stesso indirizzo di e-mail, e poi procedere alla cancellazione di questo messaggio dal Vostro sistema. E\' strettamente proibito e potrebbe essere fonte di violazione di legge qualsiasi uso, comunicazione, copia o diffusione dei contenuti di questa comunicazione da parte di chi la abbia ricevuta per errore o in violazione degli scopi della presente.');
	  $mail->setBcc($email . ", info@profoffice.it, vanni@profoffice.it, paolino.m@gmail.com");
	  //$mail->setBcc($email . ", paolino.m@gmail.com");
	  $mail->send(array(''));
	} else {
	  $mail = new htmlMimeMail();
	  $mail->setSubject("Registration Prof Office");
	  $mail->setHTML('We thank you for registering to the website www. profoffice.it.<br>We remember you that the data to enter upon the login section are:<br>Email: ' . $email . '<br>Passoword: '. $password . '<br><br>To activate your account we have to check your email address, please click the following link: <a href="http://www.profoffice.it/activate.php?code='.$codice.'&id='.$idUtenteRegistrato.'&lingua='.$lingua.'">http://www.profoffice.it/activate.php?code='.$codice.'&id='.$idUtenteRegistrato.'&lingua='.$lingua.'</a><br><br><img src="http://www.profoffice.it/logoprofnuovo.gif"/><br>Prof s.r.l<br>via Cao de Villa 6/a<br>31020 Falze\' di Piave TV / ITALY<br>T+39 0438 903190 F+39 0438 903228 <br><br>This communication is intended solely for the use of the intended addressees. If you have received this communication in error, please notify us immediately by responding to this email and then delete it from your system. Any use, disclosure, copying or distribution of the contents of this communication by a not-intended recipient or in violation of the purposes of this communication is strictly prohibited and may be unlawful.');
	  $mail->setBcc($email . ", info@profoffice.it, vanni@profoffice.it, paolino.m@gmail.com");
	  //$mail->setBcc($email . ", paolino.m@gmail.com");
	  $mail->send(array(''));
	}
	 header( "Location: /login-registrati.php?actionregister=ok" );
    } else {
      header( "Location: /login-registrati.php?actionregister=ko" );
    }
}
?>
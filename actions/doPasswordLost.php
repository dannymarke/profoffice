<?php
include ("../common/common.php");
include ('../common/mailSender/htmlMimeMail.php');

$conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
mysql_select_db(DATABASE);

$lingua = $_SESSION['lingua'];
$email = "";

if(isset($_POST["email_recover"])) $email = htmlspecialchars($_POST["email_recover"]);

$sQuery = "SELECT "
	."   id,"
	."   email,"
	."   password,"
	."   stato"
	." FROM"
	."   utenti"
	." WHERE "
	."   email='".$email."'"
	." LIMIT 1";
$result =  mysql_query($sQuery);
$num_rows = mysql_num_rows($result);

if($num_rows > 0) {
    $passwordpersa = mysql_result($result, 0, "password");
    
    if($lingua == "it") {       
      $mail = new htmlMimeMail();
      $mail->setSubject("Password accesso Prof Office");
      $mail->setHTML('La sua passoword d\'accesso è: '.$passwordpersa.'<br><br><img src="http://www.profoffice.it/logoprofnuovo.gif"/><br>Prof s.r.l<br>via Cao de Villa 6/a<br>31020 Falze\' di Piave TV / ITALY<br>T+39 0438 903190 F+39 0438 903228 <br><br>La presente comunicazione e\' indirizzata esclusivamente ai destinatari della medesima qui indicati. Nel caso in cui abbiate ricevuto per errore la presente comunicazione, vogliate cortesemente darcene immediata notizia, rispondendo a questo stesso indirizzo di e-mail, e poi procedere alla cancellazione di questo messaggio dal Vostro sistema. E\' strettamente proibito e potrebbe essere fonte di violazione di legge qualsiasi uso, comunicazione, copia o diffusione dei contenuti di questa comunicazione da parte di chi la abbia ricevuta per errore o in violazione degli scopi della presente.');
      $mail->setBcc($email);
      $mail->send(array(''));
    } else {
      $mail = new htmlMimeMail();
      $mail->setSubject("Lost Password Prof Office");
      $mail->setHTML('Your password is: '.$passwordpersa.'<br><br><img src="http://www.profoffice.it/logoprofnuovo.gif"/><br>Prof s.r.l<br>via Cao de Villa 6/a<br>31020 Falze\' di Piave TV / ITALY<br>T+39 0438 903190 F+39 0438 903228 <br><br>This communication is intended solely for the use of the intended addressees. If you have received this communication in error, please notify us immediately by responding to this email and then delete it from your system. Any use, disclosure, copying or distribution of the contents of this communication by a not-intended recipient or in violation of the purposes of this communication is strictly prohibited and may be unlawful.');
      $mail->setBcc($email);
      $mail->send(array(''));
    }
    header( "Location: ../login.php?lostpassword=ok" );
} else {
    header( "Location: ../login.php?lostpassword=ko" );
}
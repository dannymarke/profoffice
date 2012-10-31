<?php
include ("../common/common.php");
include ('../common/mailSender/htmlMimeMail.php');

$conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
mysql_select_db(DATABASE);

$nome = "";
$cognome = "";
$email = "";
$telefono = "";
$indirizzo = "";
$posizione = "";
$nazione = "";
$provincia = "";
$testo = "";
$materiale = "";
$regione = "";

if(isset($_POST["nome"])) $nome = htmlspecialchars($_POST["nome"]);
if(isset($_POST["cognome"])) $cognome = htmlspecialchars($_POST["cognome"]);
if(isset($_POST["email"])) $email = htmlspecialchars($_POST["email"]);
if(isset($_POST["telefono"])) $telefono = htmlspecialchars($_POST["telefono"]);
if(isset($_POST["indirizzo"])) $indirizzo = htmlspecialchars($_POST["indirizzo"]);
if(isset($_POST["posizione"])) $posizione = htmlspecialchars($_POST["posizione"]);
if(isset($_POST["nazione"])) $nazione = htmlspecialchars($_POST["nazione"]);
if(isset($_POST["provincia"])) $provincia = htmlspecialchars($_POST["provincia"]);
if(isset($_POST["testo"])) $testo = htmlspecialchars($_POST["testo"]);
if(isset($_POST["adv"])) $materiale = htmlspecialchars($_POST["adv"]);

$lingua = $_SESSION['lingua'];

if(isset($_POST["regione"])) {
    $sQuery = "SELECT * "
    ." FROM regioni "
    ." WHERE codice_istat = ".$_POST["regione"];
    
    $risultato = mysql_query($sQuery);
    
    $regione = mysql_result($risultato, 0, "regione");
}

if($nome != "" && $cognome != "" && $email != "") {
    $mail = new htmlMimeMail();
    $mail->setSubject("Contatto WEB Profoffice");
    $mail->setHTML('Da:' . $nome . ' ' . $cognome . '<br>' . 'Email:' . $email . '<br>'. 'Telefono:'. $telefono . '<br>' . 'Nazione:'.$nazione . '<br>' . 'Regione:'.$regione. '<br>' . 'Provincia:' .$provincia  . '<br>' . 'Indirizzo:'. $indirizzo . '<br>'.'Testo:' . $testo. '<br>'.'Posizone:' . $posizione . '<br>' . 'Acconsente invio materiale:'.$materiale);
    $mail->setBcc("info@profoffice.it ,paolino.m@gmail.com");
    if( $mail->send(array('')) ) {
	header( "Location: ../contatti.php?&esito=ok");
    } else {
	header( "Location: ../contatti.php?&esito=ko");
    }
} else {
    
}
?>
<?php
include ("../common/common.php");

$conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
mysql_select_db(DATABASE);

$email = htmlspecialchars($_POST["email_login"]);
$password = htmlspecialchars($_POST["password_login"]);

$sQuery = "SELECT "
	."   id,"
	."   email,"
	."   password,"
	."   stato"
	." FROM"
	."   utenti"
	." WHERE "
	."   email='".$email."'"
	." AND "
	."   password='".$password."'"
	." LIMIT 1";
$result =  mysql_query($sQuery);
$num_rows = mysql_num_rows($result);

if($num_rows > 0) {
    $stato_utente = mysql_result($result, 0, "stato");
    if($stato_utente != "false") {
	if(!isset($_SESSION['loggato'])) 
	    $_SESSION['loggato'] = "true";
	header( "Location: ../login.php?action=loginok" );
    } else {
	header( "Location: ../login.php?action=nonattivo" );
    }
} else {
    header( "Location: ../login.php?action=loginko" );
}
?>
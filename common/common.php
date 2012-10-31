<?php
define("USERNAME","root");
define("PASSWORD","root");
define("HOSTNAME","localhost");
define("DATABASE","profoffice");

function getUrlStringValue($urlStringName, $returnIfNotSet) {
  if(isset($_GET[$urlStringName]) && $_GET[$urlStringName] != "")
    return $_GET[$urlStringName];
  else
    return $returnIfNotSet;
}

if (!session_id()) { 
    session_start();
}
if(!isset($_SESSION['lingua'])) 
    $_SESSION['lingua'] = "it";

$cambioLingua = getUrlStringValue("lang", "");

if($cambioLingua != "") {
	if(isset($_SESSION['lingua']))
    	unset($_SESSION['lingua']);
    $_SESSION['lingua'] = $cambioLingua;
}

$lingua = $_SESSION['lingua'];

if($lingua == "en") {
    include ("./common/labels_en.php");
} else {
    include ("./common/labels_it.php");
}
?>
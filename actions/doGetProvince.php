<?php
include ("../common/common.php");
if(getUrlStringValue("id", "") != "") {
    $idRegione = getUrlStringValue("id", "");
    $conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
    mysql_select_db(DATABASE);

    $sQuery = "SELECT * "
    ." FROM province "
    ." WHERE regione = ".$idRegione
    ." ORDER BY provincia";
    $province = mysql_query($sQuery);

    while ($row = mysql_fetch_assoc($province)) { ?>
	<option value="<?php echo $row['provincia']?>"><?php echo $row['provincia']?></option>
    <?php
    }
}
?>
<?php include_once "includes/conditional-init.php"; ?>
<?php
    $conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
    mysql_select_db(DATABASE);

    $continente = getUrlStringValue("continente", "europa");
    $idStato = getUrlStringValue("stato", "0");
    $idStato = str_replace("%20", "", $idStato);

    $sQuery = "SELECT DISTINCT(nazione_it), nazione_en "
    ."FROM  ".$continente;

    $nazioni = mysql_query($sQuery);

    if($idStato != "-1" && $idStato != "" && $idStato != null) {
        $sQuery = "SELECT * "
        ."FROM  ".$continente." "
        ."WHERE nazione_it = '".$idStato."'"
        ."ORDER BY citta_it;";
        $referenze = mysql_query($sQuery);
    } else {
        $row = mysql_fetch_assoc($nazioni);
        if($row) {
            $sQuery = "SELECT * "
            ."FROM  ".$continente." "
            ."WHERE nazione_it = '".$row['nazione_it']."'"
            ."ORDER BY citta_it;";
            $referenze = mysql_query($sQuery);
            mysql_data_seek($nazioni, 0);
        }
    }
?>
    <head>
        <?php include_once "includes/head.php"; ?>

        <link rel="image_src" href="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />

        <meta property="og:image" content="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />
        <meta property="og:title" content="Profoffice S.r.l." />
        <meta property="og:description" content="Profoffice S.r.l. Azienda mobili per arredamento di uffici" />

        <meta name="description" content="Profoffice S.r.l., lista delle referenze"/>
        <meta name="abstract" content="Referenze"/>
        <meta name="keywords" content="Ufficio, Armadi, Scrivanie, Tavoli riunione, Parete divisoria, Monolitica, Partition, Wall, Cabinets, Desks"/>
        <meta name="author" content="webmaster"/>
        <meta name="reply-to" content="info@profoffice.it"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="expires" content="2012.12.31"/>

        <title>Prof office - <?php echo(REFERENZE);?></title>

    </head>
    <body class="referenze_wr">
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr">
                  <div id="left_wr">
                    <div id="text_wr">
                      <h2 id="product_name">EUROPA</h2>
                      <ul id="references_main_list">
                        <?php
                        $cont = 0;
                        while ($row = mysql_fetch_assoc($nazioni)) {
                            if($cont == 0 && $idStato == -1) { ?>
                                <li><a class="current" href="/referenze/<?php echo $continente?>/<?php echo $row['nazione_it']?>"><?php echo strtoupper(utf8_encode($row['nazione_'.$lingua]))?></a></li>
                            <?php } else if($idStato == $row['nazione_it']) { ?>
                                <li><a class="current" href="/referenze/<?php echo $continente?>/<?php echo $row['nazione_it']?>"><?php echo strtoupper(utf8_encode($row['nazione_'.$lingua]))?></a></li>
                            <?php } else { ?>
                                <li><a href="/referenze/<?php echo $continente?>/<?php echo $row['nazione_it']?>"><?php echo strtoupper(utf8_encode($row['nazione_'.$lingua]))?></a></li>
                            <?php } 
                            $cont++;?>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                  <div id="right_wr">
                    <div id="references_scroller_wr">
                      <ul id="references_scroller_list">
                          <?php
                            $cont = 0;
                            while ($row = mysql_fetch_assoc($referenze)) {?>
                                <li><?php echo utf8_encode($row['desc_'.$lingua])?>, <?php echo strtoupper(utf8_encode($row['citta_'.$lingua]))?></li>
                          <?php } ?>
                        </ul>
                        <ul id="references_scroller_controls">
                          <li id="prev"><a href="#">prev</a></li>
                          <li id="next"><a href="#">next</a></li>
                        </ul>
                    </div>
                  </div>
                </section>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>
    </body>
</html>
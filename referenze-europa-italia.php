<?php include_once "includes/conditional-init.php"; ?>
<?php
if($lingua == "it") {
    $conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
    mysql_select_db(DATABASE);

    $sQuery = "SELECT * "
    ."FROM regioni ORDER BY regione";
    $regioni = mysql_query($sQuery);
}
?>
    <head>
        <?php include_once "includes/head.php"; ?>

        <link rel="image_src" href="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />

        <meta property="og:image" content="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />
        <meta property="og:title" content="Profoffice S.r.l." />
        <meta property="og:description" content="Profoffice S.r.l. Azienda mobili per arredamento di uffici" />

        <meta name="description" content="Dall'esperienza nel settore del mobile nel 1995 nasce Prof come azienda che produce sistemi d'arredo per ufficio. Partendo dalle collezioni operative, negli anni sviluppa sistemi direzionali, soluzioni per la reception e le sale riunioni, fino alle pareti divisorie e attrezzate. Dal mercato nazionale, Prof si affacciata a quello internazionale con la capacità di proporre soluzioni di arredo complete per tutti gli ambienti di lavoro e con la flessibilità di realizzare progetti su misura personalizzati. Azienda giovane e dinamica, oggi Prof decide di orientare i suoi nuovi prodotti al design più internazionale, con un occhio sempre attento alla funzionalità e alla cura del dettaglio. Oggi Prof si presenta con l'evoluzione del proprio catalogo e con una rafforzata corporate identity, per aumentare la competitività e interpretare il cambiamento delle nuove esigenze dello spazio ufficio contemporaneo."/>
        <meta name="abstract" content="Profoffice S.r.l. Azienda mobili per arredamento di uffici"/>
        <meta name="keywords" content="Armadi, Scrivanie, Tavoli riunionr, Parete divisoria, Monolitica, Workstation, Partition, Wall, Cabinets, Desks"/>

        <title>ProfOffice S.r.l. - referenze - europa - italia</title>

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
                        <li><a class="current" href="/referenze/europa/italia">ITALIA</a></li>
                        <li><a href="/referenze/europa/francia">FRANCIA</a></li>
                        <li><a href="/referenze/europa/spagna">SPAGNA</a></li>
                        <li><a href="/referenze/europa/germania">GERMANIA</a></li>
                        <li><a href="/referenze/europa/grecia">GRECIA</a></li>
                      </ul>
                    </div>
                  </div>
                  <div id="right_wr">
                    <div id="references_scroller_wr">
                      <ul id="references_scroller_list">
                          <li>Hotel Danieli, VENEZIA</li>
                          <li>Hotel Hilton, ROMA</li>
                          <li>Hotel Lorem, MILANO</li>
                          <li>Hotel Ipsum, RICCIONE</li>
                          <li>Hotel Dolor, NAPOLI</li>
                          <li>Hotel Sit amet, SAN SEPLOCRO</li>
                          <li>Hotel Consectetur, PADOVA</li>
                          <li>Hotel Adipiscing, REGGIO CALABRIA</li>
                          <li>Hotel Elit urque, ENNA</li>
                          <li>Hotel Lirensites, OTRANTO</li>
                          <li>Hotel Wagallupa, TORINO</li>
                          <li>Hotel Erimester, GENOVA</li>
                          <li>Hotel Palmyras, SASSARI</li>
                          <li>Hotel Boogaboonga, SASSUOLO</li>
                          <li>Hotel Maribellis, LORETO</li>
                          <li>Hotel Danieli, VENEZIA</li>
                          <li>Hotel Hilton, ROMA</li>
                          <li>Hotel Lorem, MILANO</li>
                          <li>Hotel Ipsum, RICCIONE</li>
                          <li>Hotel Dolor, NAPOLI</li>
                          <li>Hotel Sit amet, SAN SEPLOCRO</li>
                          <li>Hotel Consectetur, PADOVA</li>
                          <li>Hotel Adipiscing, REGGIO CALABRIA</li>
                          <li>Hotel Elit urque, ENNA</li>
                          <li>Hotel Lirensites, OTRANTO</li>
                          <li>Hotel Wagallupa, TORINO</li>
                          <li>Hotel Erimester, GENOVA</li>
                          <li>Hotel Palmyras, SASSARI</li>
                          <li>Hotel Boogaboonga, SASSUOLO</li>
                          <li>Hotel Maribellis, LORETO</li>
                          <li>Hotel Danieli, VENEZIA</li>
                          <li>Hotel Hilton, ROMA</li>
                          <li>Hotel Lorem, MILANO</li>
                          <li>Hotel Ipsum, RICCIONE</li>
                          <li>Hotel Dolor, NAPOLI</li>
                          <li>Hotel Sit amet, SAN SEPLOCRO</li>
                          <li>Hotel Consectetur, PADOVA</li>
                          <li>Hotel Adipiscing, REGGIO CALABRIA</li>
                          <li>Hotel Elit urque, ENNA</li>
                          <li>Hotel Lirensites, OTRANTO</li>
                          <li>Hotel Wagallupa, TORINO</li>
                          <li>Hotel Erimester, GENOVA</li>
                          <li>Hotel Palmyras, SASSARI</li>
                          <li>Hotel Boogaboonga, SASSUOLO</li>
                          <li>Hotel Maribellis, LORETO</li>
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
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

        <title>ProfOffice S.r.l. - News</title>

    </head>
    <body class="news_wr">
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr">
                  <div id="left_wr">
                    <div id="news_scroller_wr">
                      <ul id="news_scroller_list">
                          <li>
                            <a href="news/01">
                              <strong class="news_date">01.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                          <li>
                            <a href="news/01">
                              <strong class="news_date">02.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                          <li>
                            <a href="news/01">
                              <strong class="news_date">03.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                          <li>
                            <a href="news/01">
                              <strong class="news_date">04.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                          <li>
                            <a href="news/01">
                              <strong class="news_date">05.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                          <li>
                            <a href="news/01">
                              <strong class="news_date">06.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                          <li>
                            <a href="news/01">
                              <strong class="news_date">07.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                          <li>
                            <a href="news/01">
                              <strong class="news_date">08.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                          <li>
                            <a href="news/01">
                              <strong class="news_date">09.11.2012</strong>
                              <span class="news_text">Lorem ipsum voluptate dolore in magna sunt reprehenderit culpa mollit laborum id sit minim cupidatat est fugiat veniam consectetur officia minim ullamco. </span>
                            </a>
                          </li>
                        </ul>
                        <ul id="news_scroller_controls">
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
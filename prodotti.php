<?php include_once "includes/conditional-init.php"; ?>
<?php
$conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
mysql_select_db(DATABASE);

$sQuery = "SELECT * "
."FROM  prodotti "
."WHERE nome_query = '".getUrlStringValue("modello", "uno")."';";

$risultato = mysql_query($sQuery);


if (!$risultato) {
    die('Invalid query: ' . mysql_error());
}

$nomeProdottoOriginale = mysql_result($risultato, 0, "nome_".$lingua);
$nomeProdotto = str_replace(" ", "_", $nomeProdottoOriginale);
mysql_data_seek($risultato, 0);
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

        <meta name="description" content="Profoffice S.r.l. dettaglio del prodotto <?php echo($nomeProdottoOriginale); ?>" />
        <meta name="abstract" content="Dettaglio del prodotto <?php echo($nomeProdottoOriginale); ?>"/>
        <meta name="keywords" content="Ufficio, Armadi, Scrivanie, Tavoli riunione, Parete divisoria, Monolitica, Partition, Wall, Cabinets, Desks"/>
        <meta name="author" content="webmaster"/>
        <meta name="reply-to" content="info@profoffice.it"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="expires" content="2012.12.31"/>

        <title>ProfOffice S.r.l. - Dettaglio prodotto <?php echo($nomeProdottoOriginale); ?></title>

    </head>
    <body>
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr" class="bg_zoom dyn_bg_wr">
                    <div id="left_wr">
                        <div id="text_wr">
                            <h2 id="product_name"><?php echo($nomeProdottoOriginale); ?></h2>
                            <article id="product_description_wr">
                                <p id="intro_text">
                                    <?php
                                        mysql_data_seek($risultato, 0);
                                        echo(trim(utf8_encode(mysql_result($risultato, 0, "desc_".$lingua))));
                                        mysql_data_seek($risultato, 0);
                                    ?>
                                </p>
                                <ul id="resources_list">
                                    <li><a href="<?php echo(mysql_result($risultato, 0, "pdfColori")); ?>"><?php echo(FINITURE_MISURE);?></a></li>
                                    <?php
                                    if(isset($_SESSION['loggato']) && $_SESSION['loggato'] == "true") {
                                    ?>
                                        <li><a href="<?php echo(mysql_result($risultato, 0, "pdfVarianti"));?>"><?php echo(CATALOGO);?></a></li>
                                    <?php } else { ?>
                                        <li><a href="/login"><?php echo(CATALOGO);?></a></li>
                                    <?php } ?>
                                </ul>
                            </article>
                        </div>
                        <div id="pic_wr">
                            <?php
                            /*
                            ATTENZIONE
                            generare via php la ul#pic_nav_nav se e solo se c'è più di una li in ul#pic_nav_wr
                            in pratica, solo se hai più di 6 thumbs per il prodotto corrente.
                            javascript controlla se c'è in pagina un elemento di id="pic_nav_nav" e se le trova
                            allora applica la logica per la gestione della navigazione dei thumb
                            */
                            ?>
                            <ul id="pic_nav_nav">
                                <li><a class="current" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                            <ul id="pic_nav_wr">
                                <li>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_small.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_small.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_small.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_small.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_small.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_small.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                </li>
                                <?php
                                /*
                                */
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div id="right_wr" class="dyn_bg_wr">
                        <img src="/img/immagineCover.jpg" alt="Zero" id="Zero" class="img_seo_placeholder">
                    </div>
                </section>
                <div id="main_slideshow_wr">
                    <a href="#" id="prev_control" class="main_slideshow_navigator">prev</a>
                    <a href="#" id="next_control" class="main_slideshow_navigator">next</a>
                    <a href="#" id="close_control" class="main_slideshow_navigator">close</a>
                    <ul id="main_slideshow_list">
                        <li><img rel="/img/immagineGrande_slide.jpg?01" src="/img/transparent.gif" alt="01" title="01" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?02" src="/img/transparent.gif" alt="02" title="02" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?03" src="/img/transparent.gif" alt="03" title="03" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?04" src="/img/transparent.gif" alt="04" title="04" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?05" src="/img/transparent.gif" alt="05" title="05" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?06" src="/img/transparent.gif" alt="06" title="06" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?07" src="/img/transparent.gif" alt="07" title="07" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?08" src="/img/transparent.gif" alt="08" title="08" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?09" src="/img/transparent.gif" alt="09" title="09" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?10" src="/img/transparent.gif" alt="10" title="10" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?11" src="/img/transparent.gif" alt="11" title="11" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?12" src="/img/transparent.gif" alt="12" title="12" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?13" src="/img/transparent.gif" alt="13" title="13" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?14" src="/img/transparent.gif" alt="14" title="14" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?15" src="/img/transparent.gif" alt="15" title="15" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?16" src="/img/transparent.gif" alt="16" title="16" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?17" src="/img/transparent.gif" alt="17" title="17" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?18" src="/img/transparent.gif" alt="18" title="18" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?29" src="/img/transparent.gif" alt="19" title="19" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?20" src="/img/transparent.gif" alt="20" title="20" /></li>
                        <li><img rel="/img/immagineGrande_slide.jpg?21" src="/img/transparent.gif" alt="21" title="21" /></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>
    </body>
</html>
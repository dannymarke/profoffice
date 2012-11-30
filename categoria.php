<?php include_once "includes/conditional-init.php"; ?>
<?php
$conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
mysql_select_db(DATABASE);

$sQuery = "SELECT * "
."FROM  prodotti_new "
."WHERE categoria = '".getUrlStringValue("categoria", "working")."';";

$risultato = mysql_query($sQuery);

if(getUrlStringValue("categoria", "working") == "working") {
    $top_lista = "130px";
} else if(getUrlStringValue("categoria", "working") == "reception") {
    $top_lista = "143px";
} else if(getUrlStringValue("categoria", "working") == "executive") {
    $top_lista = "157px";
} else if(getUrlStringValue("categoria", "working") == "storage") {
    $top_lista = "170px";
} else if(getUrlStringValue("categoria", "working") == "wall") {
    $top_lista = "183px";
}

?>
    <head>
        <?php include_once "includes/head.php"; ?>

        <link rel="image_src" href="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />

        <meta property="og:image" content="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />
        <meta property="og:title" content="Profoffice S.r.l." />
        <meta property="og:description" content="Profoffice S.r.l. Azienda mobili per arredamento di uffici" />

        <meta name="description" content="Profoffice S.r.l. News aziendali" />
        <meta name="abstract" content="Notizie e aggiornamenti su Profoffice"/>
        <meta name="keywords" content="News notizie nuovi prodotti ufficio mobili"/>
        <meta name="author" content="webmaster"/>
        <meta name="reply-to" content="info@profoffice.it"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="expires" content="2012.12.31"/>

        <title>Prof office - <?php echo getUrlStringValue("categoria", "working");?></title> <!-- ricalcolare il nome delle categoria -->

    </head>
    <body class="category_preview_wr">
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr" class="bg_zoom dyn_bg_wr">
                    <div id="left_wr" style="top: <?php echo $top_lista;?>"> <!-- ho lasciato accessibile il posizionamento verticale del menù perchè forse riesci a collegarlo alla categoria corrente per l'allineamento -->
                        <div id="text_wr">
                            <ul id="product_list">
                                <?php
                                    while ($row = mysql_fetch_assoc($risultato)) { ?>
                                        <!-- esempio con due immagini statiche, dinamicizzare -->
                                        <li style="font-size:12px; line-height:13px;"><a rel="/catalogo/<?php echo strtolower($row['categoria'])?>/<?php echo $row['nome_query'];?>/preview.jpg" href="/prodotti/<?php echo strtolower($row['categoria'])?>/<?php echo $row['nome_query']?>"><?php echo ucfirst(strtolower($row['nome_it']));?></a></li>
                                <?php } ?>                
                            </ul>
                        </div>
                    </div>
                    <div id="right_wr" class="dyn_bg_wr">
                        <?php
                        mysql_data_seek($risultato, 0);
                        $row = mysql_fetch_assoc($risultato); ?>
                        <!-- questa immagine è fissa: via javascript se ne cambia l'attributo src leggendolo dall'attributo rel dei links -->
                        <img src="/catalogo/<?php echo strtolower($row['categoria'])?>/<?php echo $row['nome_query']?>/preview.jpg" alt="" id="category_preview_image" class="img_seo_placeholder">
                    </div>
                </section>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>
    </body>
</html>
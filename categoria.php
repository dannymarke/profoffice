<?php include_once "includes/conditional-init.php"; ?>
<?php
$conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
mysql_select_db(DATABASE);

$sQuery = "SELECT * "
."FROM  news_new "
."WHERE id = ".getUrlStringValue("id", "0").";";

$risultato = mysql_query($sQuery);

$news = mysql_fetch_assoc($risultato)
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

        <title>Prof office - <?php echo utf8_encode($news['nome_'.$lingua]);?></title>

    </head>
    <body class="news_detail_wr">
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr" class="bg_zoom dyn_bg_wr">
                    <div id="left_wr">
                        <div id="text_wr">
                            <ul id="product_list">
                                <li><a rel="url_immagine_prodotto" href="/prodotti/linea_corrente/nome_prodotto">nome_prodotto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="right_wr" class="dyn_bg_wr">
                        <img src="<?php echo($news['imgPreview']);?>" alt="" id="" class="img_seo_placeholder">
                    </div>
                </section>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>
    </body>
</html>
<?php include_once "includes/conditional-init.php"; ?>
<?php
$conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
mysql_select_db(DATABASE);

$sQuery = "SELECT * "
."FROM  azienda ";

$risultato = mysql_query($sQuery);
$testo = mysql_result($risultato, 0, "testo_".$lingua);
?>
    <head>
        <?php include_once "includes/head.php"; ?>

        <link rel="image_src" href="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />

        <meta property="og:image" content="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />
        <meta property="og:title" content="Profoffice S.r.l. - Video" />
        <meta property="og:description" content="Profoffice S.r.l. design" />

        <meta name="description" content="Profoffice S.r.l. design" />
        <meta name="abstract" content="Design"/>
        <meta name="keywords" content="Azienda Profoffice design"/>
        <meta name="author" content="webmaster"/>
        <meta name="reply-to" content="info@profoffice.it"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="expires" content="2012.12.31"/>

        <title>Prof office - <?php echo(strtoupper(AZIENDA));?> - <?php echo(strtoupper(VIDEO));?></title>

    </head>
    <body>
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr" class="bg_zoom dyn_bg_wr">
                    <img src="/img/profFactory.jpg" alt="image name" id="Azienda - profilo" class="img_seo_placeholder">
                    <article class="content_wr" style="right: 50px; top: 50px; color: #000000">
                        <h2 class="content_title"><?php echo(strtoupper(VIDEO));?></h2>
                        <div class="content_text scroll-pane">
                            <p>
                                
                            </p>
                        </div>
                    </article>
                </section>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>
    </body>
</html>
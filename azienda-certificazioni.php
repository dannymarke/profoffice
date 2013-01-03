<?php include_once "includes/conditional-init.php"; ?>
    <head>
        <?php include_once "includes/head.php"; ?>

        <link rel="image_src" href="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />

        <meta property="og:image" content="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />
        <meta property="og:title" content="Profoffice S.r.l. - L'azienda" />
        <meta property="og:description" content="Profoffice S.r.l. certificazioni" />

        <meta name="description" content="Profoffice S.r.l. certificazioni" />
        <meta name="abstract" content="Certificazioni dell'azienda."/>
        <meta name="keywords" content="Azienda Profoffice funzionalità cura ufficio contemporaneo"/>
        <meta name="author" content="webmaster"/>
        <meta name="reply-to" content="info@profoffice.it"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="expires" content="2012.12.31"/>

        <title>Prof office - <?php echo(strtoupper(AZIENDA));?> - <?php echo(strtoupper(CERTIFICAZIONI));?></title>

    </head>
    <body>
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr" class="bg_zoom dyn_bg_wr">
                    <img src="/img/main_azienda_certificazioni.jpg" alt="image name" id="Azienda - profilo" class="img_seo_placeholder">
                    <div style="position:absolute; text-align:right; left: 50px; top:150px; width:200px; color: #000000;">
                        <p>
                            <?php echo(CERTIFICAZIONE_SCARICA);?>
                        </p>
                        <ul id="resources_list_certificazioni">
                            <li><a href="/files/CertificatoISO9001.pdf" target="_blank"><strong>ISO 9001<strong></a></li>
                        </ul>
                    </div>
                    <article class="content_wr" style="font-weight: normal; right: 50px; top:112px; width:450px; color: #000000; text-">
                        <h2 class="content_title" style="font-size:15px;"><strong><?php echo(CERTIFICAZIONI_AZIENDA);?></strong></h2>
                        <div class="content_text scroll-pane" style="font-size:13px; line-height:13px;">
                            <p>
                                <?php echo(CERTIFICAZIONE_TESTO);?>
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
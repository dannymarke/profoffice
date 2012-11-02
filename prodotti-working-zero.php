<?php include_once "includes/conditional-init.php"; ?>
    <head>
        <?php include_once "includes/head.php"; ?>

        <link rel="image_src" href="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />

        <meta property="og:image" content="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME']; ?>/img/zoom_image.jpg" />
        <meta property="og:title" content="Profoffice S.r.l." />
        <meta property="og:description" content="Profoffice S.r.l. Azienda mobili per arredamento di uffici" />

        <meta name="description" content="Dall'esperienza nel settore del mobile nel 1995 nasce Prof come azienda che produce sistemi d'arredo per ufficio. Partendo dalle collezioni operative, negli anni sviluppa sistemi direzionali, soluzioni per la reception e le sale riunioni, fino alle pareti divisorie e attrezzate. Dal mercato nazionale, Prof si affacciata a quello internazionale con la capacità di proporre soluzioni di arredo complete per tutti gli ambienti di lavoro e con la flessibilità di realizzare progetti su misura personalizzati. Azienda giovane e dinamica, oggi Prof decide di orientare i suoi nuovi prodotti al design più internazionale, con un occhio sempre attento alla funzionalità e alla cura del dettaglio. Oggi Prof si presenta con l'evoluzione del proprio catalogo e con una rafforzata corporate identity, per aumentare la competitività e interpretare il cambiamento delle nuove esigenze dello spazio ufficio contemporaneo."/>
        <meta name="abstract" content="Profoffice S.r.l. Azienda mobili per arredamento di uffici"/>
        <meta name="keywords" content="Armadi, Scrivanie, Tavoli riunionr, Parete divisoria, Monolitica, Workstation, Partition, Wall, Cabinets, Desks"/>

        <title>ProfOffice S.r.l. - prodotti - working - zero</title>

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
                            <h2 id="product_name">Zero</h2>
                            <article id="product_description_wr">
                                <p id="intro_text">
                                    Lorem ipsum veniam veniam aute pariatur exercitation dolor adipisicing ut occaecat veniam nisi in eu enim irure anim sit est amet pariatur nulla ea officia incididunt adipisicing magna.<br/>
                                    Aute pariatur exercitation dolor laborum non culpa officia quis et enim deserunt fugiat cillum laboris reprehenderit Ut et labore et.
                                </p>
                                <ul id="resources_list">
                                    <li><a href="#">download CATALOGO</a></li>
                                    <li><a href="#">download SCHEDE TECNICHE</a></li>
                                    <li><a href="#">download LOREM</a></li>
                                    <li><a href="#">download IPSUM DOLOR</a></li>
                                </ul>
                            </article>
                        </div>
                        <div id="pic_wr">
                            <?php
                            /*
                            <ul id="pic_nav_nav">
                                <li><a class="current" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                            </ul>
                            */
                            ?>
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
                                <?php
                                /*
                                <li>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_small.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_small.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                    <a href="#"><img src="/img/icon/icon_prodotti_large.jpg" alt="" title=""></a>
                                </li>
                                */
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div id="right_wr" class="dyn_bg_wr">
                        <img src="/img/zero_cover.jpg" alt="Zero" id="Zero" class="img_seo_placeholder">
                    </div>
                </section>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>
    </body>
</html>
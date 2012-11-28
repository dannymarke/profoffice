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

        <title>Prof office</title>

    </head>
    <body>
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr" class="bg_zoom dyn_bg_wr">
                    <img src="/img/slideshow/img_00.jpg" alt="" id="img_slide_0" class="immagine_slide" />
                    <img src="/img/slideshow/img_01.jpg" alt="" id="img_slide_1" class="immagine_slide nascosto" />
                    <img src="/img/slideshow/img_02.jpg" alt="" id="img_slide_2" class="immagine_slide nascosto" />
                    <img src="/img/slideshow/img_03.jpg" alt="" id="img_slide_3" class="immagine_slide nascosto" />
                    <img src="/img/slideshow/img_04.jpg" alt="" id="img_slide_4" class="immagine_slide nascosto" />
                </section>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready( function() {
                var offset = 0;
                setInterval(function(){
                    $("#img_slide_"+offset).fadeOut(1500, function() {
                    // Animation complete.
                    });
                    if(offset != 4) {
                        $("#img_slide_"+(offset+1)).fadeIn(1500, function() {
                            // Animation complete.
                            offset = offset+1;
                        });
                    } else {
                        $("#img_slide_"+0).fadeIn(1500, function() {
                            // Animation complete.
                            offset = 0;
                        });
                    }
                },9000);
            });
        </script>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>
    </body>
</html>
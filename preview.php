<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="it" xml:lang="it">

<head>
    <title>Prof office</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <meta name="description" content="Dall'esperienza nel settore del mobile nel 1995 nasce Prof come azienda che produce sistemi d’arredo per ufficio. Partendo dalle collezioni operative, negli anni sviluppa sistemi direzionali, soluzioni per la reception e le sale riunioni, fino alle pareti divisorie e attrezzate. Dal mercato nazionale, Prof si è affacciata a quello internazionale con la capacità di proporre soluzioni di arredo complete per tutti gli ambienti di lavoro e con la flessibilità di realizzare progetti su misura personalizzati. Azienda giovane e dinamica, oggi Prof decide di orientare i suoi nuovi prodotti al design più internazionale, con un occhio sempre attento alla funzionalità e alla cura del dettaglio. Oggi Prof si presenta con l’evoluzione del proprio catalogo e con una rafforzata corporate identity, per aumentare la competitività e interpretare il cambiamento delle nuove esigenze dello spazio ufficio contemporaneo."/>
    <meta name="abstract" content="Profoffice S.r.l. Azienda mobili per arredamento di uffici"/>
    <meta name="keywords" content="Ufficio, Armadi, Scrivanie, Tavoli riunione, Parete divisoria, Monolitica, Partition, Wall, Cabinets, Desks"/>
    <meta name="author" content="webmaster"/>
    <meta name="reply-to" content="info@profoffice.it"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="expires" content="2012.12.31"/>

    <meta property="og:title" content="Profoffice S.r.l" />
    <meta property="og:type" content="company" />
    <meta property="og:url" content="http://www.profoffice.it" />
    <meta property="og:image" content="http://www.profoffice.it/html/images/logo_menu.png" />
    <meta property="og:site_name" content="Profoffice S.r.l" />

    <!-- Favicon -->
    <link rel="icon" href="http://www.profoffice.it/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.profoffice.it/favicon.ico" type="image/x-icon" />
    <!-- CSS -->
    <link rel="stylesheet" title="" media="screen" href="./index.css" type="text/css" />
    <!-- Javascript -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"> </script>
    <script src="https://apis.google.com/js/plusone.js"></script>

    <style type="text/css">

        #inner_wrapper {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 120px;
            height: 190px;
            margin: -95px 0 0 -60px;
            text-align: center;
        }

        #inner_wrapper #imgLogo {
            position: absolute;
            left: 0;
            top: 0;
            width: 80px;
            height: 78px;
            margin: 0 0 0 10px;
        }

        #inner_wrapper h1 {
            position: absolute;
            top: 110px;
            color: #000000;
            margin: 0 10px;
            font-size: 12px;
            line-height: 15px;
        }

        #inner_wrapper address {
          position: absolute;
          top: 130px;
          margin: 0 10px;
          font-size: 9.6px;
          line-height: 13.44px;
          text-align: left;
        }

        #inner_wrapper address span {
          display: block;
        }

        .tel_num, .email_link, .map_link {
          color: #808284;
          text-decoration: none;
        }

        #inner_wrapper #main_lang_selector {
          position: absolute;
          left: 190px;
          top: 112px;
          right: auto;
          width: 70px;
          margin: 0 0 0 -33px;
          padding: 0;
          overflow: hidden;
          font-size: 0;
          line-height: 0;
          list-style-type: none;
          text-align: right;
        }

        #inner_wrapper #main_lang_selector li {
          position: relative;
          display: inline-block;
          vertical-align: top;
        }

        #inner_wrapper #main_lang_selector li:first-child {
          border-right: 1px solid black;
        }

        #inner_wrapper #main_lang_selector li a:hover,
        #inner_wrapper #main_lang_selector li a.current {
          color: black;
        }

        #inner_wrapper #main_lang_selector li a {
          padding: 0 5px;
          font-size: 12px;
          line-height: 12px;
          text-decoration: none;
          color: #808284;
        }

    </style>


</head>

<body>
    <div id="main">
    	<div id="main_contenitore">
            <div id="inner_wrapper">
                <img id="imgLogo" src="/img/prof_logo.png" />
                <h1>PROF Srl</h1>
                <address>
                    <span>T. <a class="tel_num" href="tel:390438903190">+39 0438 903190</a></span>
                    <span>F. <a class="tel_num" href="tel:390438903228">+39 0438 903228</a></span>
                    <a class="email_link" href="mailto:info@profoffice.it">info@profoffice.it</a>
                    <span>p.iva IT03134570260</span>
                </address>
                <ul id="main_lang_selector">
                <?php
                if(isset($_SESSION['lingua']))
                if($_SESSION['lingua'] == 'it')
                echo '<li><a href="/home.php?lang=it" class="current">ITA</a></li><li><a href="/home.php?lang=en">ENG</a></li>';
                else
                echo '<li><a href="/home.php?lang=it">ITA</a></li><li><a href="/home.php?lang=en" class="current">ENG</a></li>';
                else
                echo '<li><a href="/home.php?lang=it">ITA</a></li><li><a href="/home.php?lang=en">ENG</a></li>';
                ?>
                </ul>
            </div>
    	</div>
    </div>
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        try {
        var pageTracker = _gat._getTracker("UA-17226955-1");
        pageTracker._initData();
        pageTracker._trackPageview();
        } catch(err) {}
        function trackSezione(page) {
          pageTracker._trackPageview(page);
        }
    </script>
</body>

</html>

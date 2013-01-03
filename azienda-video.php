<?php include_once "includes/conditional-init.php"; ?>
<?php
  $conn = mysql_pconnect(HOSTNAME, USERNAME, PASSWORD);
  mysql_select_db(DATABASE);

  $sQuery = "SELECT * "
  ."FROM video ORDER BY ordine DESC;";
  $risultato = mysql_query($sQuery);
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

        <title>Prof office - Video</title>

    </head>
    <body class="video_wr">
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr">
                  <div id="left_wr" style="top:80px;">
                    <div id="news_scroller_wr">
                      <ul id="news_scroller_list">
                        <?php
                        $cont = 0;
                        while ($row = mysql_fetch_assoc($risultato)) {
                        ?>
                          <li>
                            <?php
                            if($cont == 0) { ?>
                              <a rel="<?php echo str_replace(" ", "", $row['imgPreview']);?>" href="">
                                <strong class="news_date"><?php echo $row['datapubblicazione']?></strong>
                                <span class="news_text"><?php echo $row['nome_'.$lingua]?></span>
                              </a>
                            <?php } else { ?>
                              <a rel="<?php echo str_replace(" ", "", $row['imgPreview']);?>" href="">
                                <strong class="news_date"><?php echo $row['datapubblicazione']?></strong>
                                <span class="news_text"><?php echo $row['nome_'.$lingua]?></span>
                              </a>
                            <?php } ?>
                          </li>
                        <?php
                        $cont++;
                        }
                        ?>
                        </ul>
                        <ul id="news_scroller_controls" style="display:none;">
                          <li id="prev"><a href="#">prev</a></li>
                          <li id="next"><a href="#">next</a></li>
                        </ul>
                    </div>
                  </div>
                  <div id="right_wr" class="dyn_bg_wr" style="width:489px; height:275px; overflow:hidden; top:138px; background: url('/img/loader.gif') no-repeat center center transparent;">
                      <?php
                      mysql_data_seek($risultato, 0);
                      $row = mysql_fetch_assoc($risultato);
                      ?>
                      <div id="cont_video">
                        <iframe src="http://player.vimeo.com/video/<?php echo str_replace(" ", "", $row['imgPreview']);?>?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="489" height="275" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                      </div>
                  </div>
                </section>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>
    </body>
</html>
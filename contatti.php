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

        <title>ProfOffice S.r.l. - contatti</title>

    </head>
    <body class="contatti_wr">
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr" class="bg_zoom dyn_bg_wr">
                    <div id="left_wr">
                        <div id="text_wr">
                            <h2 id="product_name">Uffici, Stabilimento e Showroom:</h2>
                            <article id="product_description_wr">
                                <p id="intro_text">
                                    Via Cao de Villa 6/A <br/>
                                    31020 Falz&egrave; di Piave, TV / Italy <br/>
                                    T. <a href="tel:+390438903190" class="tel_num">+39 0438 903190</a> <br/>
                                    F. <a href="tel:+390438903228" class="tel_num">+39 0438 903228</a> <br/>
                                    <a class="email_link" href="mailto:info@profoffice.it">info@profoffice.it</a>
                                </p>
                                <a class="map_link" href="https://maps.google.it/maps?q=profoffice&daddr=Via+Cao+De+Villa,+6/a,+31020+Treviso+%28Prof+s.r.l.%29&hl=it&ll=45.857888,12.159934&spn=0.012389,0.027852&sll=43.036776,12.392578&sspn=26.584077,57.041016&view=map&geocode=Cah721jhtlHdFRDCuwIdXYS5ACGu8EplzYF8VQ&t=h&z=16&vpsrc=0" target="_blank">Indicazioni stradali</a>
                            </article>
                        </div>
                    </div>
                    <div id="right_wr" class="dyn_bg_wr">
                        <p>Per informazioni invia una mail a <a class="email_link" href="mailto:info@profoffice.it">info@profoffice.it</a></p>
                                  <div id="right_container">
                                <?php if(!isset($_GET['esito'])) { ?>
                                    <form id="contact_form" action="./actions/doContatti.php" method="post">
                                      <fieldset>
                                        <div>
                                          <?php echo(COMPILA_FORM);?><br/><br/>
                                          Email: <a href="mailto:info@profoffice.it">info@profoffice.it</a>
                                        </div>
                                      </fieldset>
                                      <fieldset>
                                        <div><label for="_nome"><?php echo(NOME);?></label><input class="required _name" type="text" name="nome" id="_nome"/></div>
                                        <div><label for="_cognome"><?php echo(COGNOME);?></label><input class="required _name" type="text" name="cognome" id="_cognome"/></div>
                                        <div><label for="_email"><?php echo(EMAIL);?></label><input class="required _email" type="text" name="email" id="_email"/></div>
                                        <div><label for="_telefono"><?php echo(TELEFONO);?></label><input type="text" name="telefono" id="_telefono"/></div>
                                        <?php
                                if($lingua == "it") {
                                ?>
                                <div class="no_cufon">
                                          <label for="_regione"><?php echo(REGIONE);?></label>
                                          <select name="regione" id="_regione">
                                            <option value=""><?php echo(SELEZIONA_REGIONE);?></option>
                                            <?php
                                    while ($row = mysql_fetch_assoc($regioni)) { ?>
                                        <option value="<?php echo $row['codice_istat']?>"><?php echo $row['regione']?></option>
                                    <?php
                                    }
                                    ?>
                                          </select>
                                        </div>
                                        <div class="no_cufon">
                                          <label for="_provincia"><?php echo(SELEZIONA_PROVINCIA);?></label>
                                          <select name="provincia" id="_provincia" disabled="disabled">
                                          </select>
                                        </div>
                                <?php
                                } else { ?>
                                    <div><label for="_nazione"><?php echo(NAZIONE);?></label><input type="text" name="nazione" id="_nazione"/></div>
                                <?php
                                }
                                ?>
                                        <div><label for="_indirizzo"><?php echo(INDIRIZZO);?></label><input type="text" name="indirizzo" id="_indirizzo"/></div>
                                        <div class="no_cufon">
                                          <label for="_posizione"><?php echo(POSIZIONE);?></label>
                                          <select name="posizione" id="_posizione" class="required _select">
                                            <option value=""><?php echo(SELEZIONA_POSIZIONE);?></option>
                                            <option value="Azienda"><?php echo(AZIENDA);?></option>
                                            <option value="Architetto"><?php echo(ARCHITETTO);?></option>
                                            <option value="Ingegnere"><?php echo(INGEGNERE);?></option>
                                            <option value="Rappresentante"><?php echo(RAPPRESENTANTE);?></option>
                                            <option value="Rivenditore"><?php echo(RIVENDITORE);?></option>
                                            <option value="Privato"><?php echo(PRIVATO);?></option>
                                            <option value="Altro"><?php echo(ALTRO);?></option>
                                          </select>
                                        </div>
                                        <div style="margin:0;"><label for="_testo"><?php echo(TESTO);?></label><textarea name="testo" id="_testo"></textarea></div>
                                        <div style="text-align:right; padding: 0 15px 0 0; font-size:12px; line-height:16px;"><?php echo(DATI_OBBLIGATORI);?></div>
                                        <div>
                                          <label for="_sicurezza" id="lbl_sicurezza" style="width:auto;">
                                            <?php echo(CODICE_SICUREZZA);?>
                                            <strong id="captcha" style="display:inline-block; margin:0 20px; vertical-align:middle;">
                                              <script type="text/javascript">
                                                var _code = parseInt(Math.random()*10000);
                                                document.open();
                                                document.write(_code);
                                                document.close();
                                              </script>
                                            </strong>
                                          </label>
                                          <input style="width:30px;" type="text" name="sicurezza" id="_sicurezza" maxlength="4" />
                                        </div>
                                        <div class="checkbox_wrapper"><input class="required _checkbox" type="checkbox" name="dati" id="_dati"/><label for="_dati"><?php echo(PRIVACY);?></label></div>
                                        <div class="checkbox_wrapper"><input type="checkbox" name="adv" id="_adv"/><label for="_adv"><?php echo(MATERIALE);?></label></div>
                                        <div style="text-align:right; padding: 0 15px 0 0; margin-top:-10px;"><button style="cursor:pointer;" type="submit">&raquo; <?php echo(INVIA);?></button></div>
                                      </fieldset>
                                    </form>
                                <?php } else { ?>
                                <div>
                                <?php if(isset($_GET['esito']) && $_GET['esito'] == "ok") { ?>
                                    <?php echo(utf8_encode(SPEDIZIONE_OK));?>
                                <?php } else { ?>
                                    <?php echo(utf8_encode(SPEDIZIONE_KO));?>
                                <?php } ?>
                                </div>
                                <?php } ?>
                                  </div>
                    </div>
                </section>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>

        <script>
        $(document).ready(function() {
            $('#_regione').bind('change',function(){
                regione = $(this).val();
                $.ajax({
                  url: "/actions/doGetProvince.php?id="+regione,
                  context: document.body,
                  success: function(result){
                $('#_provincia').html('<option value="">Seleziona provincia</option>' + result);
                $('#_provincia').removeAttr('disabled');
                  }
                });
            });


            $('#contact_form').bind('submit',function(evt){

              // evt.preventDefault();

              $('.required').each(function(){
                var me = $(this);
                var label = me.prev('label');

                if(me.hasClass('_name')){
                  var regexp = /^([a-z\u0027\u00C0-\u00F6\u00F8-\u017E]{1,})(\s[a-z\u0027\u00C0-\u00F6\u00F8-\u017E]{1,})*$/i;
                  // console.log(me.attr('id') + ' , ' + regexp.test(me.val()));
                  if(regexp.test(me.val())){
                    label.removeClass('err');
                  } else {
                    label.addClass('err');
                  }
                }

                if(me.hasClass('_email')){
                  var regexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)+(\.\w{2,4})+$/i;
                  //console.log(me.attr('id') + ' , ' + regexp.test(me.val()));
                  if(regexp.test(me.val())){
                    label.removeClass('err');
                  } else {
                    label.addClass('err');
                  }
                }

                if(me.hasClass('_select')){
                  //console.log(me.attr('id') + ' , ' + (me.val() == ''));
                  if(me.val() == ''){
                    label.addClass('err');
                  } else {
                    label.removeClass('err');
                  }
                }

                if(me.hasClass('_checkbox')){
                  var _label = me.next('label');
                  //console.log(me.attr('id') + ' , ' + (me.attr('checked')));
                  if(me.attr('checked')){
                    _label.removeClass('err');
                  } else {
                    _label.addClass('err');
                  }
                }

              });

              if(_code != parseInt($('#_sicurezza').val())){
                $('#lbl_sicurezza').addClass('err');
              }else{
                $('#lbl_sicurezza').removeClass('err');
              }

              if($('.err').size()){
                evt.preventDefault();
              }

            });
        });

        </script>
    </body>
</html>
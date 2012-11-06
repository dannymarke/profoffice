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

        <title>ProfOffice S.r.l. - login/registrati</title>

    </head>
    <body class="contatti_wr">
        <?php include_once "includes/chrome-frame.php"; ?>
        <div id="main_wr">
            <?php include_once "includes/main-header.php"; ?>
            <div id="main_body_wr">
                <?php include_once "includes/main-sidebar.php"; ?>
                <section id="main_content_wr">
                  <div id="left_wr">


                    <div>
                      <h2 class="page_title"><?php echo(strtoupper(LOGIN));?></h2>
                      <div class="descrizione"><?php echo(TESTO_LOGIN);?></div>
                    </div>
                    <form id="login_form" action="./actions/doLogin.php" method="post" style="margin-top:15px">
                      <fieldset>
                        <div>
                          <label for="_email_login"><?php echo(EMAIL);?></label>
                          <input class="required _email" type="text" name="email_login" id="_email_login"/>
                        </div>
                        <div>
                          <label for="_password_login"><?php echo(PASSWORD_AREA);?></label>
                          <input class="required _pwd" type="password" name="password_login" id="_password_login"/>
                        </div>
                        <div style="text-align:right;">
                          <button style="cursor:pointer;" type="submit">&raquo; <?php echo(INVIA);?></button>
                        </div>
                        <?php if(isset($_SESSION['loggato']) && $_SESSION['loggato'] == "true" && isset($_GET['action'])  && $_GET['action'] == "loginok") { ?>
                        <div id="esito" style="margin-top:15px"><?php echo(LOGIN_OK);?>
                        </div>
                        <?php } else if(isset($_GET['action']) && $_GET['action'] == "loginko") { ?>
                        <div id="esito" style="margin-top:15px, color:#f00"><?php echo(ESITO_LOGIN);?>
                        </div>
                        <?php } else if(isset($_GET['action']) && $_GET['action'] == "nonattivo") { ?>
                        <div id="esito" style="margin-top:15px, color:#f00"><?php echo(ACCOUNT_NON_ATTIVATO);?>
                        </div>
                        <?php }
                        ?>
                      </fieldset>
                    </form>
                    <div>
                      <div>
                          <a onclick="mostraFormLostPassword();" style="cursor:pointer;">
                              <div class="descrizione"><?php echo(PASSWORD_DIMENTICATA);?></div>
                          </a>
                          <?php if(isset($_GET['lostpassword']) && $_GET['lostpassword'] == "ok") { ?>
                              <div class="descrizione"><?php echo(EMAIL_CORRETTA);?></div>
                          <?php } else if(isset($_GET['lostpassword']) && $_GET['lostpassword'] == "ko"){ ?>
                              <div class="descrizione"><?php echo(EMAIL_ERRATA);?></div>
                          <?php } ?>
                      </div>
                      <form style="display:none;" id="forgotten_form" action="./actions/doPasswordLost.php" method="post" style="margin-top:15px">
                          <fieldset>
                              <div>
                                  <label for="_email_login"><?php echo(EMAIL);?>
                                  </label><input class="required _email" type="text" name="email_recover" id="email_recover"/>
                              </div>
                              <div style="text-align:right;">
                                  <button style="cursor:pointer;" type="submit">&raquo; <?php echo(INVIA);?></button>
                              </div>
                          </fieldset>
                      </form>
                    </div>




<!--                     <div id="text_wr">
                      <h2 id="product_name">Uffici, Stabilimento e Showroom:</h2>
                      <article id="product_description_wr">
                        <p id="intro_text">
                            Via Cao de Villa 6/A <br/>
                            31020 Falz&egrave; di Piave, TV / Italy <br/>
                            T. <a href="tel:390438903190" class="tel_num">+39 0438 903190</a> <br/>
                            F. <a href="tel:390438903228" class="tel_num">+39 0438 903228</a> <br/>
                            <a class="email_link" href="mailto:info@profoffice.it">info@profoffice.it</a>
                        </p>
                        <a class="map_link" href="https://maps.google.it/maps?q=profoffice&daddr=Via+Cao+De+Villa,+6/a,+31020+Treviso+%28Prof+s.r.l.%29&hl=it&ll=45.857888,12.159934&spn=0.012389,0.027852&sll=43.036776,12.392578&sspn=26.584077,57.041016&view=map&geocode=Cah721jhtlHdFRDCuwIdXYS5ACGu8EplzYF8VQ&t=h&z=16&vpsrc=0" target="_blank">Indicazioni stradali</a>
                      </article>
                    </div> -->
                  </div>
                  <div id="right_wr">
                    <?php if(!isset($_GET['esito'])) { ?>
                    <p class="incipit">
                      <strong><?php echo(REGISTRATI);?></strong>
                      <span><?php echo(TESTO_REGISTRATI);?></span>
                      <ins><?php echo(COMPILA_FORM_REQUIRED);?></ins>
                    </p>
                    <form id="contact_form" action="./actions/doContatti.php" method="post">
                      <fieldset>
                        <div class="row">
                          <div class="column"><label for="_nome"><?php echo(NOME);?></label><input class="required _name" type="text" name="nome" id="_nome"/></div>
                          <div class="column"><label for="_cognome"><?php echo(COGNOME);?></label><input class="required _name" type="text" name="cognome" id="_cognome"/></div>
                        </div>
                        <div class="row">
                          <div class="column"><label for="_email"><?php echo(EMAIL);?></label><input class="required _email" type="text" name="email" id="_email"/></div>
                          <div class="column"><label for="_telefono"><?php echo(TELEFONO);?></label><input class="required _tel" type="text" name="telefono" id="_telefono"/></div>
                        </div>
                        <?php
                        if($lingua == "it") {
                        ?>
                        <div class="row">
                          <div class="column">
                            <label for="_regione"><?php echo(REGIONE);?></label>
                            <select name="regione" id="_regione" class="required _select">
                              <option value=""><?php echo(SELEZIONA_REGIONE);?></option>
                            <?php
                            while ($row = mysql_fetch_assoc($regioni)) { ?>
                              <option value="<?php echo $row['codice_istat']?>"><?php echo $row['regione']?></option>
                            <?php
                            }
                            ?>
                            </select>
                          </div>
                          <div class="column">
                            <label for="_provincia"><?php echo(SELEZIONA_PROVINCIA);?></label>
                            <select name="provincia" id="_provincia" disabled="disabled" class="required _select">
                            </select>
                          </div>
                        </div>
                        <?php
                        } else { ?>
                        <div class="row"><label for="_nazione"><?php echo(NAZIONE);?></label><input class="required" type="text" name="nazione" id="_nazione"/></div>
                        <?php
                        }
                        ?>
                        <div class="row">
                          <div class="column">
                            <label for="_indirizzo"><?php echo(INDIRIZZO);?></label><input class="required _address" type="text" name="indirizzo" id="_indirizzo"/>
                          </div>
                          <div class="column">
                            <label for="_posizione"><?php echo(POSIZIONE);?></label>
                            <select name="posizione" id="_posizione" class="required _select">
                              <option value=""><?php echo(SELEZIONA_POSIZIONE);?></option>
                              <option value="Azienda"><?php echo(AZIENDA_FORM);?></option>
                              <option value="Architetto"><?php echo(ARCHITETTO);?></option>
                              <option value="Ingegnere"><?php echo(INGEGNERE);?></option>
                              <option value="Rappresentante"><?php echo(RAPPRESENTANTE);?></option>
                              <option value="Rivenditore"><?php echo(RIVENDITORE);?></option>
                              <option value="Privato"><?php echo(PRIVATO);?></option>
                              <option value="Altro"><?php echo(ALTRO);?></option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="column"><label for="_pwd"><?php echo(PASSWORD_REGISTRAZIONE);?></label><input type="password" id="_password_registrati" name="password_registrati" class="required _pwd"></div>
                          <div class="column"><label for="_password_registrati_2" id="lbl_conf_pwd"><?php echo(CONFERMA_PASSWORD);?></label><input class="required _pwd" name="password_registrati_2" id="_password_registrati_2" type="password"></div>
                        </div>
                        <div class="row"><label for="_testo"><?php echo(TESTO);?></label><textarea class="required _message" name="testo" id="_testo"></textarea></div>
                        <div class="row">
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
                          <input style="width:30px; min-width: auto;" type="text" name="sicurezza" id="_sicurezza" maxlength="4" />
                        </div>
                        <div class="row"><input class="required _checkbox" type="checkbox" name="dati" id="_dati"/><label class="wide" for="_dati"><?php echo(PRIVACY);?></label></div>
                        <div class="row"><input type="checkbox" name="adv" id="_adv"/><label class="wide" for="_adv"><?php echo(MATERIALE);?></label></div>
                        <div class="row" style="text-align:right; padding: 0 15px 0 0; margin-top:-5px;"><button style="cursor:pointer;" type="submit">&raquo; <?php echo(INVIA);?></button></div>
                      </fieldset>
                    </form>
                    <?php } else { ?>
                    <div>
                      <?php if(isset($_GET['esito']) && $_GET['esito'] == "ok") { ?>
                      <p class="incipit">
                        <strong><?php echo(utf8_encode(SPEDIZIONE_OK));?></strong>
                      </p>
                      <?php } else { ?>
                      <p class="incipit">
                        <strong><?php echo(COMPILA_FORM_SENDMAIL);?> <a class="email_link" href="mailto:info@profoffice.it">info@profoffice.it</a></strong>
                        <?php echo(utf8_encode(SPEDIZIONE_KO));?>
                      </p>
                      <?php } ?>
                    </div>
                    <?php } ?>
                  </div>
                </section>
            </div>
        </div>
        <?php include_once "includes/scripts.php"; ?>
        <?php include_once "includes/analytics.php"; ?>

        <script>
        /* recupera pwd */
        var isFormPasswordOpen = false;
        function mostraFormLostPassword() {
          if(isFormPasswordOpen) {
              $('#forgotten_form').hide("fast");
              isFormPasswordOpen = false;
          } else {
              $('#forgotten_form').show("fast");
              isFormPasswordOpen = true;
          }
        };

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

                if(me.hasClass('_tel')){
                  if(me.val() == ''){
                    label.addClass('err');
                  } else {
                    label.removeClass('err');
                  }
                }

                if(me.hasClass('_address')){
                  if(me.val() == ''){
                    label.addClass('err');
                  } else {
                    label.removeClass('err');
                  }
                }

                if(me.hasClass('_message')){
                  if(me.val() == ''){
                    label.addClass('err');
                  } else {
                    label.removeClass('err');
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

                if (me.hasClass('_pwd')) {
                  /* almeno 5 car no spazi*/
                  var regexp = /^[\S]{4,}$/i;
                  //console.log(me.attr('id') + ' , ' + regexp.test(me.val()));
                  if (regexp.test(me.val())) {
                    label.removeClass('err');
                  } else {
                    label.addClass('err');
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
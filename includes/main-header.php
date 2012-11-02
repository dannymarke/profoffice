
            <header id="main_header">
                <h1 id="main_logo_wr"><a href="/" id="main_logo" class="ir">Prof Office</a></h1>
                <ul id="main_lang_selector">
<?php
if(isset($_SESSION['lingua']))
    if($_SESSION['lingua'] == 'it')
    	echo '<li><a href="/index.php?lang=it" class="current">ITA</a></li><li><a href="/index.php?lang=en">ENG</a></li>';
    else
    	echo '<li><a href="/index.php?lang=it">ITA</a></li><li><a href="/index.php?lang=en" class="current">ENG</a></li>';
else
	echo '<li><a href="/index.php?lang=it">ITA</a></li><li><a href="/index.php?lang=en">ENG</a></li>';
?>
                </ul>
            </header>

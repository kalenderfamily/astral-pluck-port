<?php //Make sure the file isn't accessed directly.
defined('IN_PLUCK') or exit('Access denied!');
?>

<!-- THIS ONE IS PORTED THEME FROM ASTRAL HTML5up for PLUCK CMS -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> - <?php echo get_sitetitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
	 <!-- schriften werden aus inet geladen, schriften in assets können gelöscht werden PROBLEME !!!!!!!!!!!! -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  -->
	
    <!-- Astral Icon-Fonts liegen dann in assets !!! -->
    <link rel="stylesheet" href="/data/themes/<?php echo $page_theme; ?>/assets/css/fontawesome-all.min.css" />
    
    <!-- Astral CSS -->
    <link rel="stylesheet" href="/data/themes/<?php echo $page_theme; ?>/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="/data/themes/<?php echo $page_theme; ?>/assets/css/noscript.css" />
    </noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

<!-- dieses skript sorgt dafür, dass aus data-file die entsprechende Seite für pluck in die url übernommen wird
und das hash aus main.js für panel active wie im original verbleibt  -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('#nav a').forEach(function (link) {
      link.addEventListener('click', function (e) {
        e.preventDefault();

        const file = this.dataset.file;
        const hash = this.getAttribute('href'); // z. B. "#kontakt"

        if (file && hash) {
          // Neue URL mit ?file=... und #...
          const url = new URL(window.location.href);
          url.searchParams.set('file', file);
          url.hash = hash;

          // Seite mit neuer URL neu laden
          window.location.href = url.toString();
        }
      });
    });
  });
</script>


		<!-- <?php echo $title; ?>  funktionietr an dieser stelle nicht still todo-->

	<nav id="nav">
		<a href="#home" data-file="astral-home" class="fa fa-home"><span><?php echo $title; ?></span></a>
		<a href="#page" data-file="astral-content" class="fa fa-file"><span><?php echo $title; ?></span></a>
        	<a href="#kontakt" data-file="astral-contact" class="fa fa-envelope"><span><?php echo $title; ?></span></a>
		
    	</nav>

	
    <!-- Main -->
    <div id="main">
        <!-- Erste sichtbare Seite -->
        <article id="home" class="panel">
            <header>
                <h2><?php echo $title; ?></h2>
            </header>
            <section>
                <?php theme_content(); ?>
                <?php theme_area('main'); ?>
            </section>
        </article>

        <article id="page" class="panel">
            <header>
                <h2><?php echo $title; ?></h2>
            </header>
            <section>
                <?php theme_content(); ?>
                <?php theme_area('main'); ?>
            </section>
        </article>

        <article id="kontakt" class="panel">
            <header>
                <h2><?php echo $title; ?></h2>
            </header>
            <section>
		        <?php theme_content(); ?>
                <?php theme_area('main'); ?>
				
            </section>
        </article>
    </div>

    <!-- Footer -->
    <div id="footer">
        <?php theme_area('footer'); ?>
    </div>

</div>

<!-- JS -->
<script src="/data/themes/<?php echo $page_theme; ?>/assets/js/jquery.min.js"></script>
<script src="/data/themes/<?php echo $page_theme; ?>/assets/js/browser.min.js"></script>
<script src="/data/themes/<?php echo $page_theme; ?>/assets/js/breakpoints.min.js"></script>
<script src="/data/themes/<?php echo $page_theme; ?>/assets/js/util.js"></script>
<script src="/data/themes/<?php echo $page_theme; ?>/assets/js/main.js"></script>

</body>
</html>

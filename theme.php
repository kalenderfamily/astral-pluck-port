<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> - <?php echo get_sitetitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--

  This one is initial release 1.0 based on this: https://html5up.net/astral

  Still some steps pending....

  

  -->
  
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

    <!-- Navigation -->
    <nav id="nav">
        <a href="#home" class="fa fa-home"><span>Startseite</span></a>
        <a href="#page" class="fa fa-file"><span>Inhalt</span></a>
        <a href="#kontakt" class="fa fa-envelope"><span>Kontakt</span></a>
    </nav>

    <!-- Main -->
    <div id="main">
        <!-- Erste sichtbare Seite -->
        <article id="home" class="panel active">
            <header>
                <h2><?php echo $title; ?></h2>
            </header>
            <section>
                <?php theme_content(); ?>
                <?php theme_area('main'); ?>
            </section>
        </article>

        <!-- Weitere statische Seiten, nur zur Veranschaulichung -->
        <article id="page" class="panel">
            <header>
                <h2>Inhalt</h2>
            </header>
            <section>
                <p>Hier könnte dein Seiteninhalt stehen.</p>
            </section>
        </article>

        <article id="kontakt" class="panel">
            <header>
                <h2>Kontakt</h2>
            </header>
            <section>
                <p>Deine Kontaktinformationen oder ein Formular.</p>
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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Študentski svet Fakultete za matematiko in fiziko</title>

    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/js.cookie-2.0.4.min.js"></script>
    <script src="/js/svet.js"></script>

    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <?php
    if (isset($_SERVER['GA_CODE'])) {
  ?>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo $_SERVER["GA_CODE"] ?>', 'auto');
    ga('send', 'pageview');
    </script>
  <?php
    }
  ?>
  </head>
  <body>
    <div id="main-border">
      <div id="header">
        <div id="naslov">
          <div class="logo">
            <a href="/"><img src="/img/logo_fmf.gif" style="float:left"></a>
            <a href="/legal#logos">
              <img src="/img/logo_ss.png" id="ss-logo">
            </a>
          </div>
        </div>
      </div> <!-- end header -->
      <?php require_once 'menu.php'; ?>
      <div id="cookie_message">
        Za izboljšano izkušnjo na spletnih straneh uporabljamo piškotke.
        <a href="#" class="cookie_confirm">Strinjam se</a> - <a href="http://fmf.si/cookies">Preberi več</a>
      </div>

      <div id="content">

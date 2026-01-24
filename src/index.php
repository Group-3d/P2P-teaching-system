<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./style.css" type="text/css" rel="stylesheet" />
    <link href="./styles/general.css" type="text/css" rel="stylesheet" />
    <link href="./styles/landing-page.css" type="text/css" rel="stylesheet" />
    <script src="./script.js" type="module" defer></script>
  </head>
  <body>
    <?php include "components/general/headers.php" ?>
    <main class="landing-page">
      <?php 
        include_once "components/landing-page/banner.php" ;
        include_once "components/landing-page/features.php";
        include_once "components/landing-page/benefits.php";
        include_once "components/landing-page/engagements.php";
        include_once "components/landing-page/notification.php";
        include_once "components/landing-page/testimonial.php";
      ?>
    </main>
    <?php include "components/general/footers.php" ?>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./style.css" type="text/css" rel="stylesheet" />
    <link href="./styles/general.css" type="text/css" rel="stylesheet" />
    <link href="./styles/landing-page.css" type="text/css" rel="stylesheet" />
    <script src="./script.js" defer></script>
  </head>
  <body>
    <?php include "components/general/headers.php" ?>
    <main class="landing-page">
      <?php 
        include "components/landing-page/banner.php" ;
        include "components/landing-page/features.php";
      ?>
    </main>
    <?php include "components/general/footers.php" ?>
  </body>
</html>

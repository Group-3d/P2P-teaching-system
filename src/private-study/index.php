<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../style.css" type="text/css" rel="stylesheet" />
    <link href="../styles/general.css" type="text/css" rel="stylesheet" />
    <link href="../styles/private-study.css" type="text/css" rel="stylesheet" />
    <script src="../script.js" type="module" defer></script>
    <script src="../functions/study.js" type="module" defer></script>
  </head>
  <body>
    <?php include "../components/general/headers.php" ?>
    <main class="private-study">
      <?php 
        include "../components/private-study/side-menu.php";
        include "../components/private-study/study-main.php";
      ?>
    </main>
    <?php include "../components/general/footers.php" ?>
  </body>
</html>

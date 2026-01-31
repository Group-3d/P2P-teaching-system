<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content-width="device-width initial-scale=1.0">
        <title>Topic page</title>
        <link rel="stylesheet" href="file.css">
    </head>
    <body>
            <?php include "components/general/headers.php" ?>
    <main class="topic-page">
      <?php 
        include_once "components/topic/section.php";
        include_once "components/topic/main.php";
        include_once "components/topic/main2.php";
      ?>
    </main>
    <?php include "topic/footers.php" ?>
</body>
<html>



        
<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content-width="device-width initial-scale=1.0">
        <title>Topic page</title>
        <link href="../style.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="../Topic/file.css">
        <link rel="stylesheet" href="../styles/general.css" />
        <link rel="stylesheet" href="../styles/discussion.css" />
        <script src="../functions/discussion.js" type="module" defer></script>
    </head>
    <body>
    <?php include "../components/general/headers.php" ?>
    
    <main class="topic-page">
        <div class="topic-button-wrapper">
            <button id="topic-button">Start a Topic</button>
        </div>

      <?php 
        include_once "../Topic/section.php";
        include_once "../Topic/main.php";
        include_once "../Topic/main2.php";
      ?>
    </main>
    <?php include "../components/general/footers.php" ?>
</body>
<html>



        
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../style.css" type="text/css" rel="stylesheet" />
    <link href="../styles/general.css" type="text/css" rel="stylesheet" />
    <link href="../styles/discussion.css" type="text/css" rel="stylesheet" />
    <script src="../script.js" type="module" defer></script>
    <script src="../functions/discussion.js" type="module" defer></script>
  </head>
  <body>
    <?php include "../components/general/headers.php" ?>
    <div class="question-button-wrapper">
        <button id="question-button">Contribute</button>
    </div>
    <main class="discussion-page-single">
      <?php 
        include "../components/discussion/question.php";
        include "../components/discussion/all-answer.php";
      ?>
    </main>
    <?php include "../components/general/footers.php" ?>
  </body>
</html>

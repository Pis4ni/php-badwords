<?php

$txtToCensor = trim($_GET["txtToCensor"]);
$wordToCensor = trim($_GET["wordToCensor"]);
$txtLength = strlen($txtToCensor);
$censored = str_replace($wordToCensor, '<***>', $txtToCensor);
$censorLength = strlen($censored);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Document</title>
</head>

<body>
  <main class="d-flex align-items-center justify-content-center flex-column">
    <div class="card w-50 mb-5">
      <div class="card-body">
        <h5 class="card-title">Your Text</h5>

        <p class="card-text">
          <?php echo $txtToCensor ?>
        </p>
        <span class="card-subtitle">
          your text is long: <?php echo $txtLength ?>
        </span>
      </div>
    </div>
    <div class="card w-50">
      <div class="card-body">
        <h5 class="card-title">Censored version of your Text</h5>

        <p class="card-text">
          <?php echo $censored ?>
        </p>
        <span class="card-subtitle">
          your text is now long: <?php echo $censorLength ?>
        </span>
      </div>
    </div>
    <a href="./" class="btn btn-outline-success my-3">Back to Home</a>
  </main>
</body>

</html>
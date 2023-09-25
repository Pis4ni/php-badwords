<?php 

$txtToCensor =  trim($_GET["txtToCensor"]);
$wordToCensor = trim($_GET["wordToCensor"]);

$censored = str_replace($wordToCensor, '<***>', $txtToCensor);


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="./node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <main class="d-flex align-items-center justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <h5 class="card-title">Censored version of your Text</h5>
                
                <p class="card-text"><?php echo $censored ?></p>

                <a href="./" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </main>
  </body>
</html>



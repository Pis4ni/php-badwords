<?php

$censored = "ciaooooooooo";
$censoredWord = 'cavolo';
$_GET["txtToCensor"];
$_GET["wordToCensor"];
$censoredWord = trim(wordToCensor);
$censored = trim(txtToCensor);
$censored = str_replace(wordToCensor, '<***>', txtToCensor);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <div class="censored-txt">
            <p><?php echo $censored ?></p>
        </div>
</head>
<body>
    
</body>
</html>

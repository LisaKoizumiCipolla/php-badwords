<?php 

    $text = $_GET['chapter'];
    $ban = $_GET['bannedWord'];

    $censored = str_replace($ban, '***', $text)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>
            Uncensored
        </h1>
        <h2>
            Uncensored text:
        </h2>
        <p>
            <?php echo $text; ?> 
        </p>
        <h3>
            Letter count:
        </h3>
        <p>
            <?php echo strlen($text);  ?>
        </p>

        <hr>

        <h1>Censored</h1>
        <h2>
            Censored text:
        </h2>
        <p>
            <?php echo $censored; ?> 
        </p>
        <h3>
            Letter count:
        </h3>
        <p>
            <?php echo strlen($censored);  ?>
        </p>

    </body>
    </html>
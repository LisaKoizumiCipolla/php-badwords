<?php 

    $text = $_GET['chapter'];
    $ban = $_GET['bannedWord'];

    var_dump($bannedWord);

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
            Your text is:
        </h1>
        <p>
            <?php echo $text; ?>
        </p>

    </body>
    </html>
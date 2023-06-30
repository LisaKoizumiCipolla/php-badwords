<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Censorship!</title>
    </head>


    <body>
    
        <form action="./server.php" method="GET">
            <label for="chapter">Insert your text here:</label>
            <input type="text" name="chapter">
            <br>
            <label for="bannedWord">Insert the word to ban:</label>
            <input type="text" name="bannedWord">
            <br><br>
            <button type="submit">
                BANHAMMER
            </button>

        </form>

    </body>
</html>
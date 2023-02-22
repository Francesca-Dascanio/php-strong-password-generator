<?php 
    session_start();
    include __DIR__ .'/partials/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP strong password generator</title>
    </head>
    <body>
        <main>
            <h1>
                Your new password
            </h1>
            <div>
                La tua sicurissima password è:
                <?php
                    
                    echo getPassword($_SESSION['length']);
                      
                ?>
            </div>
        </main>
    </body>
</html>

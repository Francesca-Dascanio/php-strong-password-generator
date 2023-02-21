
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
                PHP strong password generator
            </h1>
            <form action="" method="get">
                <label for="password-length">Scegli la lunghezza della tua password (minimo 1 - massimo 20):</label>
                <input type="number" id="password-length" name="password-length" min="1" max="20">
            </form>
            <div>
                Lunghezza della password: 
                <?php
                    include __DIR__ . '/partials/variables.php';

                    if ($passwordLength == 'undefined') {
                        '';
                    }
                    else {
                        echo $passwordLength;
                    }  
                ?>
            </div>
            <div>
                <?php
                    include __DIR__ . '/partials/functions.php';
                    echo getPassword($passwordLength);
                ?>
            </div>
        </main>
    </body>
</html>

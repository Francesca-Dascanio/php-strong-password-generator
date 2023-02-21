<!-- Creare un form che invii in GET la lunghezza della password. -->
<!-- <?php 
    $passwordLength = $_GET['password-length'];
?> -->

<!-- Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente. -->
<?php
    function getName($passwordLength) {
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?%&_-+=@'#\<>.?/";
        $randomString = '';
    
        for ($i = 0; $i < $passwordLength; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
    
        return 'La tua nuova password sicurissima è: '.$randomString;

    }
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
                PHP strong password generator
            </h1>
            <form action="" method="get">
                <label for="password-length">Scegli la lunghezza della tua password (minimo 1 - massimo 20):</label>
                <input type="number" id="password-length" name="password-length" min="1" max="20">
            </form>
            <div>
                Lunghezza della password: 
                <?php
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
                    echo getName($passwordLength);
                ?>
            </div>
        </main>
    </body>
</html>

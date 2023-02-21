<!-- Funzione per creare password -->
<?php
    function getPassword($passwordLength) {
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?%&_-+=@'#\<>.?/";
        $randomString = '';
    
        for ($i = 0; $i < $passwordLength; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
    
        return 'La tua nuova password sicurissima è: '.$randomString;

    }
?>


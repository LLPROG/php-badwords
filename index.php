<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $bad_word = $_GET["bad_word"];
        $my_bad_word = "idiota";
        $stringa = "ciao " . $my_bad_word . " sei proprio uno " . $my_bad_word;
        echo '<h1>' . $stringa . '</h1>';
        echo '<h1> la lunghezza della stringa é: ' . strlen($stringa) . '</h1>';
        if ( $bad_word == $my_bad_word ) {
            echo '<h1>nuova stringa: ' . str_ireplace($bad_word, '***', $stringa) . '</h1>';
            echo '<h1> la lunghezza della stringa é: ' . strlen(str_ireplace($bad_word, '***', $stringa)) . '</h1>';
        }
    ?>

    <!-- Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

</body>
</html>
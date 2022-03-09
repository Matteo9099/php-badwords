<!-- Creo una frase casuale con PHP -->
<?php
    $text = "<p>KISS: Keep it simple, stupid</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    
    <p>
        <?php
            echo $text;
            echo 'Parole trovate: ';
            echo strlen($text);
        ?>
    </p>

    <!-- Documentazione presa da https://www.w3schools.com/php/php_forms.asp -->
    <form action="wordCensored.php" method="GET">
        <input type="text" name="word" placeholder="Inserire parola da censurare..." style="width: 250px;">
        <button type="submit">Invia</button>
    </form>

</body>
</html>
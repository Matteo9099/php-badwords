<?php
    $word = $_GET['word'];
    $text = '<p>KISS: Keep it simple, stupid</p>'; 
    $new_text = str_replace($word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
        <?php
            echo $new_text;
            echo strlen($new_text);
        ?>
    </p>
    
    <button onclick="history.back()">Go Back</button>


</body>
</html>
<?php
    $pargraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rem perferendis alias aut totam voluptatem laboriosam odit eius tenetur maiores exercitationem obcaecati impedit cumque voluptatibus nisi placeat, earum, ipsum molestias?";
    $parola = $_GET['parola'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <h2>Paragrafo:</h2>
    <p> <?php echo $pargraph?></p>
    <h3>lunghezza: <?php echo strlen($pargraph)?></h3>
    <input type="text" value='parola'>
    <h3><?php echo $parola?></h3>
    <h2>Paragrafo con parola criptata:</h2>
    <p><?php echo str_replace($parola, '***', $pargraph)?></p>
</body>
</html>

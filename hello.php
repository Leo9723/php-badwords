<?php
    $paragraph = $_POST['paragraph'];
    $hiddenWord = $_POST['hidden'];
    $newParagraph = str_replace($hiddenWord, '***', $paragraph)

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
    <h2>Paragrafo: <?php echo $paragraph ?></br> Lunghezza paragrafo: <?php echo strlen($paragraph) ?></h2>
    <h2>Paragrafo: <?php echo $newParagraph ?></br> Lunghezza paragrafo: <?php echo strlen($newParagraph) ?></h2>
</body>
</html>
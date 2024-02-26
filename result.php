<?php

$paragraph = $_POST['paragraph'];
$badword = $_POST['badword'];
$paragraph_length = strlen($paragraph);

$censored_paragraph = str_replace($badword, '***', $paragraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Paragraph:</h4>
    <p>
        <?= $paragraph ?>
    </p>

    <h4>Paragraph length:</h4>
    <p>
        <?= $paragraph_length ?>
    </p>

    <h4>Censored paragraph:</h4>
    <p>
        <?= $censored_paragraph ?>
    </p>
</body>
</html>
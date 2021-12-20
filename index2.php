<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSnack2</title>
</head>
<body>
    <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        // variabile name
        $lenght = strlen($name);
        // variabili mail
        $hasAt = strpos($mail, '@');
        $hasDot = strpos($mail, '.');
        $mailOk =  $hasAt != false && $hasDot != false;

        if ($lenght > 3 && $mailOk) {

            echo '<p>Accesso Riuscito</p>';
        } else {

            echo '<p>Accesso Negato</p>';
        };
    ?>
</body>
</html>
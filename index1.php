<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSnack1</title>

    <?php
        $partite = [
            [
                'Olimpia Milano' => '55',
                'Cantù' => '60'
            ],
            [
                'Virtus Bologna' => '35',
                'Dinamo' => '50'
            ],
            [
                'Alianz Trieste' => '55',
                'New Basket Brindisi' => '40'
            ],
        ];
    ?>
</head>
<body>
    <p>
        <?php
            var_dump($partite);
        ?>
    </p>
</body>
</html>
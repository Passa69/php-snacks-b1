<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSnack1</title>

    <?php
        $teams = [
            [
                'home' => 'Olimpia Milano',
                'homePoint' => 55,
                'external' => 'Cantù',
                'extPoint' => 60
            ],
            [
                'home' => 'Virtus Bologna',
                'homePoint' => 45,
                'external' => 'Dinamo',
                'extPoint' => 50
            ],
            [
                'home' => 'New Basket Brindisi',
                'homePoint' => 35,
                'external' => 'Alianz Trieste',
                'extPoint' => 30
            ]
        ];
    ?>
</head>
<body>
    <p>
        <?php
            for($x=0; $x < count($teams); $x++) {

                echo $teams[$x]['home'] . ' : ' . $teams[$x]['homePoint'] . '<br>' . $teams[$x]['external'] . ' : ' . $teams[$x]['extPoint'] . '<br>';
            }
        ?>
    </p>
</body>
</html>
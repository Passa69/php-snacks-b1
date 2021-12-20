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
            // [
            //     'home' => 'Olimpia Milano',
            //     'homePoint' => 45,
            //     'external' => 'Cantù',
            //     'extPoint' => 50
            // ],
            // [
            //     'home' => 'Olimpia Milano',
            //     'homePoint' => 35,
            //     'external' => 'Cantù',
            //     'extPoint' => 30
            // ]
        ];
    ?>
</head>
<body>
    <p>
        <?php
            for($x=0; $x < count($teams); $x++) {

                echo $teams[0]['home'] . ' : ' . $teams[0]['homePoint'] . '<br>' . $teams[0]['external'] . ' : ' . $teams[0]['extPoint'] . '<br>';
            }
        ?>
    </p>
</body>
</html>
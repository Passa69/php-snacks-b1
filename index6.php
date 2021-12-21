<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSnack6</title>
</head>
<body>
    <style>
        .box {
            width: 150px;
            padding: 20px 10px;
        }

        .grey {
            background-color: grey;
        }

        .green {
            background-color: green;
        }
    </style>

    <?php
       $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ]; 

        // foreach ($db as $person => $people) {
        //     echo '<div class="teacher">' . $person . '</div>';

        //     foreach ($people as $names) {
        //         echo $names['name'] . '<br>'
        //                 . $names['lastname'] . '<br>';
        //     }
        // }
    ?>

    <div class="box grey">
        <?php
            $teachers = $db['teachers'];
            foreach ($teachers as $teacher) {
                echo $teacher['name'] . ' ' . $teacher['lastname'] . '<br>';
            }
        ?>
    </div>

    <div class="box green">
    <?php
            $pms = $db['pm'];
            foreach ($pms as $pm) {
                echo $pm['name'] . ' ' . $pm['lastname'] . '<br>';
            }
        ?>
    </div>
</body>
</html>
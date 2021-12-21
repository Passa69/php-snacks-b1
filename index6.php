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
        .teacher {
            background-color: grey;
        }

        .student {
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

        foreach ($db as $person => $people) {
            echo '<div class="teacher">' . $person . '</div>';

            foreach ($people as $names) {
                echo $names['name'] . '<br>'
                        . $names['lastname'] . '<br>';
            }
        }
    ?>
</body>
</html>
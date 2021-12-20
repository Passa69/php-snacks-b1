<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSnack3</title>
</head>
<body>
    <?php
        $posts = [
            '10/01/2021' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Roberto Bello',
                    'text' => 'Testo post 2'
                ],
            ],
            '13/04/2020' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Giulia Reggia',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];

        $keys = array_keys($posts);
        for ($x=0; $x<count($keys); $x++) {
            $key = $keys[$x];
            $postsByKey = $posts[$key];
            for ($i=0; $i<$postsByKey; $i++) {
                $value1 = $posts[$key][$i]['title'];
                // $value2 = $posts[$key][$i]['author'];
                // $value3 = $posts[$key][$i]['text'];
            };

            echo $key . '<br>' . $value1 . '<br>';
        }
    ?>
</body>
</html>
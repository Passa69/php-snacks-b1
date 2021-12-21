<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSanck7</title>
</head>
<body>
    <?php
        $students = [
            'Mario Rossi' => [5, 6, 9, 3, 10],
            'Antonio Verdi' => [7, 8, 1, 10, 9]
        ];

        foreach ($students as $names => $grades) {
            $avg = 0;

            foreach ($grades as $grade) {
                $avg += $grade;

            }
            $avg /= count($grades);

            echo '<h4>' . $names . '</h4>' . '<h5>' . $avg . '</h5>';
        }
    ?>
</body>
</html>
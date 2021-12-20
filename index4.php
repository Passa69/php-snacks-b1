<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSnack4</title>
</head>
<body>
    <?php
        $arrNum = [];
        
        while (count($arrNum) < 15) {
            $number = rand(1, 100);

            if (!in_array($number, $arrNum)) {
                $arrNum[] = $number;
            }
        }
        // var_dump($arrNum);

        for ($x=0; $x< count($arrNum); $x++) {
            echo $arrNum[$x] . '<br>';
        }
    ?>
</body>
</html>
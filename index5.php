<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSnack5</title>
</head>
<body>
    <?php
        $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quod eaque odit ipsa minima molestias culpa delectus sit. 
                        Iure consectetur maiores, adipisci dolor, numquam amet omnis ex vitae esse. 
                        Ad, consequuntur';

        $paragraphs = explode('.', $paragraph);
        
        foreach ($paragraphs as $element) {
            
            echo $element . '.' . '<br>';
        }
    ?>
</body>
</html>
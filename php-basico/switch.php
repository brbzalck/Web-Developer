<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $parametro = 4;

        switch ($parametro) {
            case 1 == $parametro:
                echo 'case1';
                break;
            case 2 == $parametro:
                echo 'case2';
                break;
            case 3 == $parametro:
                echo 'case3';
                break;
            default:
                echo 'default';
                break;
        };

    ?>
</body>
</html>
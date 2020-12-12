<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <nav class="header-menu">
            <ul class="header-list">
                <li><a href="lesson1.php" class="header-link">Урок 1</a></li>
                <li><a href="" class="header-link">Урок 2</a></li>
                <li><a href="lesson3.php" class="header-link">Урок 3</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="content">
<?php

function getStyle($num) {
    $res = getColor($num%10);
    if($num > 9) {
        $res = getColor($num / 10 % 10).$res;
    }
    if($num > 99) {
        $res = getColor($num/100).$res;
    }
    return $res;
}

function getColor($digit) {
    switch ($digit) {
        case 1: $color = 'red'; break;
        case 2: $color = 'green'; break;
        case 3: $color = 'yellow'; break;
        case 4: $color = 'blue'; break;
        case 5: $color = 'orange'; break;
        case 6: $color = 'lime'; break;
        case 7: $color = 'pink'; break;
        case 8: $color = 'cyan'; break;
        case 9: $color = 'purple'; break;
        case 0: $color = 'magenta'; break;
    }

    return '<span style="color: '.$color.'">'.$digit.'</span>';
}

echo '<table id="multiplication-table">';
    for ($row = 1; $row <= 2; $row++) {
        echo '<tr>';
        for($col = 1 + 5 * ($row-1); $col <= 5 * $row; $col++) {
            echo '<td>';
            for($i = 1; $i <= 10; $i++) {
                echo getStyle($col), ' x ';
                echo getStyle($i), ' = ';
                echo getStyle($col*$i), '<br>';
            }
            echo '</td>';
        }
        echo '</tr>';
    }
echo '</table>';

?>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-copy">
            Copy, 2020
        </div>
        <div class="footer-text">
            Lorem ipsum dolor sit amet.
        </div>
    </footer>
</div>
</body>
</html>

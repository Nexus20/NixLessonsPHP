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
                <li><a href="lesson2.php" class="header-link">Урок 2</a></li>
                <li><a href="lesson3.php" class="header-link">Урок 3</a></li>
            </ul>
        </nav>    
    </header>
    <main class="main">
        <section class="content">
            <?php

            if(isset($_POST['string'])) {
                $res = join(array_reverse(str_split($_POST['string'])));
                echo 'Обработанная строка: <span class="answer">'.$res.'</span> ';
                echo '<a href="lesson3.php" class="link-back">Назад</a>';
            }
            else {
                echo <<< EOT
            <form action="" method="post">
                <label for="input-string">Введите строку:</label>
                <input type="text" id="input-string" name="string"> &nbsp;
                <input type="submit">
            </form>
EOT;
            }
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

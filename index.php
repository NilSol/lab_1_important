<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>почем в Одессе рубероид</title>
</head>
<body>
<form action="" method="post">
    <b>Введите количество:</b><br>
    <p> <input type="number" size="20" required pattern="^[ 0-9]+$" name="name"/></p>
    <! -- 1) Сначала мне нужно посчитать стоимость материалов для рубероида -->
    <! -- 2) посчитать стоимость работ-->
    <! -- 3) Наценка +20% -->
    <?php
    $json = file_get_contents('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');

    $courses = json_decode($json,true);

  var_dump($courses);

    ?>
</body>
</html>
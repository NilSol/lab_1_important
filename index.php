<!doctype html>
<! -- 1) а)Стоимость материалов для изготовлния рубероида + б)стоимость работ + в)20% наценка предприятия по изготовлению рубероида(формула)
а) - полимерная пленка($) - кровельный картон($) - битум(евро) - песок(грн)
б) - зп(через клавиатуру) 1кв.м = зп/(22*8)/3
-->
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>почем в Одессе рубероид</title>
</head>
<pre>
<form action="" method="post">
    <b>Введите количество полимерной пленки в доларах:</b>
    <input type="number"   name="name1" min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
    <b>Введите количество кровельного картона в доларах:</b>
    <input type="number"  name="name2" min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
    <b>Введите количество битума в евро:</b>
    <input type="number" name="name3" min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
    <b>Введите количество песка в грн:</b>
    <input type="number"  name="name4" min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
    <b>Введите зарплату работникам в грн:</b>
    <input type="number"   name="salary" min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
</form>
    <?php
    $json = file_get_contents('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');

    $courses = json_decode($json,true);// 27, 34
    $dollar = $courses[27];
    $euro = $courses[34];
    echo "Доллар= " . $dollar["rate"];
    echo " ";
    echo "Евро= " . $euro["rate"];


$cost_of_mat = ($_POST('name1') * $dollar) + ($_POST('name2') * $dollar) + ($_POST('name3') * $euro) +  $_POST('name4');
$cost_work = $_POST('salary')/(22*8)/3;
?>
</pre>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
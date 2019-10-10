<!doctype html>
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
    <b>Введите количество полимерной пленки( цена в доларах):</b>
    <input type="number"   name="name1"  required min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
    <b>Введите количество кровельного картона(цена в доларах):</b>
    <input type="number"  name="name2" required min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
    <b>Введите количество битума(цена в евро):</b>
    <input type="number" name="name3" required min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
    <b>Введите количество песка(цена в грн):</b>
    <input type="number"  name="name4" required min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
    <b>Введите зарплату работникам в грн:</b>
    <input type="number"   name="salary" required min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
     <p> <input TYPE="submit" value ="посчитать" class="btn btn-outline-primary"></p>
</form>
    <?php
    $json = file_get_contents('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
    $courses = json_decode($json,true);//  это индексы доллара и евра 27, 34
    $eur = $usd = 0;
    foreach($courses as $cours) {
        if($cours['r030'] == 840)
        {
            $usd = $cours['rate'];
        }
        if ($cours['r030'] == 978)
        {
            $eur = $cours['rate'];
        }
    }
    $cost_of_mat = ($_POST['name1'] * $usd) + ($_POST['name2'] * $usd) + ($_POST['name3'] * $eur) +  $_POST['name4']; // суммарная стоимость материалов
    $cost_work = $_POST['salary']/(22*8)/3; // стоимость работников
    $markup = ($cost_work + $cost_of_mat) * 0.2; // наценка предриятия
    $ruberoid = $cost_of_mat + $cost_work + $markup;
    echo "Рубероид:" . $ruberoid;
    ?>
</pre>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
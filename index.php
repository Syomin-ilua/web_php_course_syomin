<?php
// Первое задание

$price1 = 1503;
$price2 = 1120;
$price3 = 220;

$product1 = 'Чайник';
$product2 = 'Кофейник';
$product3 = 'Кипятильник';

// Второе задание
$price4 = 1230;
$price5 = 1440;
$price6 = 2350;

$price7 = 330;
$price8 = 550;
$price9 = 1000;

$average = ($price1 + $price2 + $price3) / 3;

$maxProduct = $product1;

function maxPrice($price1,$price2, $price3) {
    $maxPrice = 0;

    if($price1 > $price2 && $price1 > $price3) {
        $maxPrice = $price1; 
    } else if ($price2 > $price1 && $price2 > $price3) {
        $maxPrice = $price2;
    } else if($price3 > $price1 && $price3 > $price2) {
        $maxPrice = $price3;
    } else {
        $maxPrice = 'Введите полную цену товара!';
    }

    return $maxPrice;
}

// Третье задание

function passwordValidator($password) {
    $passwordValid = 'qwerty123';

    if($password == $passwordValid) {
        return 'Пароль верный';
    } else {
        return 'Пароль не верный';
    }
}

// Четвёртое задание
function inf() {
    $price = 100;
 
    for($i = 0; $price < 150; $i++) {
        if(!$i) {
            $price = ($price * 0.1) + $price;
            echo "В конце года:  ".round($price).'руб. <br/>';
        } else {
            $price = ($price * 0.035) + $price;
            echo "Через $i лет:  ".round($price).'руб. <br/>';
    }
}
}

// Пятое задание
$orders = [
    'Чайник',
    'Стакан',
    'Кофейник',
    'Кипятильник'
];

array_push($orders, "Компьютер", "Ноутбук");

sort($orders);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №1</title>
</head>
<body>


    <h1>Первое задание</h1>

<p>
    <?
        echo $product1 . ' => ' . $price1 .' руб';  
    ?> 
    <br>
    <?
        echo $product2 . ' => ' . $price2 .' руб';
    ?> 
    <br>
    <? 
        echo $product3 . ' => ' . $price3 .' руб';
    ?>
</p>

<h3>
    <?
        echo 'Средняя цена товаров = ' .round($average)
    ?>
</h3>

<h1>Второе задание</h1>

<table>
		<thead>
			<tr>
				<th>Товар</th>
				<th>Цена</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
                    <?
                        echo $product1
                    ?>
                </td>
				<td><?echo $price1?></td>
			</tr>
			<tr>
				<td><?echo $product2?></td>
				<td><?echo $price2?></td>
			</tr>
			<tr>
				<td><?echo $product3?></td>
				<td><?echo $price3?></td>
			</tr>
		</tbody>
	</table>
    
    <h3>
        <?
            echo 'Средняя цена товаров = ' .round($average) .' руб';
        ?>
    </h3>

    <p>
        <?
            echo 'Самый дорогой товар - ' .$maxProduct. ' с ценой ' .maxPrice($price1,$price2, $price3). ' руб';
        ?> <br>
        <?
            echo 'Самый дорогой товар - ' .$maxProduct. ' с ценой ' .maxPrice($price4,$price5, $price6). ' руб';
        ?> <br>
        <?
            echo 'Самый дорогой товар - ' .$maxProduct. ' с ценой ' .maxPrice($price7, $price8, $price9). ' руб';
        ?>
    </p>

    <h1>Третье задание</h1>

    <p>
        <?
            echo passwordValidator('qwery123');
            print passwordValidator('qwerty123');
        ?>
    </p>

    <h1>Четвёртое задание</h1>

    <p>
        <?
            inf();
        ?>
    </p>

    <h1>Пятое задание</h1>

    <p>
        <?
            for($i = 0; $i < count($orders); $i++) {
                echo $orders[$i];
                echo "<br>";
            }
            echo "Кол-во товаров - " .count($orders);
            echo "<br>";
        ?>
        <br>
    </p>
    
</body>
</html>
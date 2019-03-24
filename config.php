<?php 
    session_start();

    function goodsArr($textfile) //будет принимать имя файла и возвращать массив с товарами
        {
            $list = file("$textfile");
            foreach ($list as $key => $value) {
            	$good = explode('*', $value);
            	$goods[]=$good;
            }
            return $goods;
        }

    function amountselect($key, $amount) //будет принимать ключ товара в массиве и количество этого товара и выводить строчный select для выбора количества
        {
            if (!empty($amount)) {
            	for ($i = 0; $i <= $amount; $i++) {
                    $amountAr[] = "<option> $i </option>";

                }
            	$amuontStr = implode(" ", $amountAr);
                $amountSelect = "<select name = '$key'>".$amuontStr."</select>";
            } 
            return $amountSelect;
            
        }


    
?>
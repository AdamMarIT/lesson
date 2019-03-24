
<html>
    <head>
        <title> </title>
        <meta charset="UTF-8">
    </head> 
    <body>
    	<form name ="order" action="index.php" method= "POST">
    	<table>
    		<caption align="center"> Добро пожаловать, пожалуйста, оформите ваш заказ</caption>
    		<thead><tr><td>Товар</td><td>Цена</td><td>Количество</td></tr></thead>
    		<tbody>
    			<?php 
	     		for($i = 0; $i < count($goods); $i++) {
	     			$good = $goods[$i][0];
	     			$price = $goods[$i][1];
                    if (isset($_SESSION['amount'])){
                        $amount = "<select name = ".$i."><option>".$_SESSION['amount'][$i]."</option></select>";
                    } else {
	     			    $amount = amountselect($i, $goods[$i][2]);
                    }
                    echo "<tr><td>".$good."</td><td>".$price."</td><td>".$amount."</td></tr>";
                }
             ?>
    		</tbody>
    	</table>
        <input type="submit" name="submit" value="Заказать">
        </form>   
	</body>
</html>

<?php
ini_set('default_charset', 'UTF-8');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Домашнее задание №2 | Рамис Касимов</title>
    </head>
    <body>
        <form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
            Введи число от 1 до 5 <input type="number" name="yourNumber">
            <input type="submit">
        </form>
        <br/>
<?php
if (isset($_GET["yourNumber"])) {
	$a = rand (1,5);
	$b = $_GET["yourNumber"];
	if ($b>$a) {
		echo "Много<br/>";
		echo "Компьютер задумал $a<br/><br/>";
	}
	elseif ($b<$a) {
		echo "Мало<br/>";
		echo "Компьютер задумал $a<br/><br/>";
	}
	else {
		echo "Вы угадали!<br/>";
		echo "Компьютер задумал $a<br/><br/>";
	}
}
?>
    </body>
</html>
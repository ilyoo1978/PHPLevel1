<?php
	$title = 'php HW1';
	$h1 = 'Домашнее задание №1';
	//задание со звёздочкой
	$a = 1;
	$b = 2;
	$b += $a;
	$a = $b - $a;
	$b -= $a;
			
	//это уже к сравнениям и привидениям типов относится
	$a = 5;
	$b = '05';

?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1><?php echo $h1; ?></h1>
		<div class="container">
		<div><p>$a = 5;</br>
				$b = '05';</br>
				var_dump($a == $b);</br>
			</p>
			result - 
			<?php
			$a = 5;
			$b = '05';
			var_dump($a == $b);
			?>
			<p>
				Потому что это не строгое сравнение. Интерпретатор приводит переменные к числовым значениям.
			</p>
			
		</div>
		<div>
			<p>var_dump((int)'012345');</p>
			result - 
			<?php
			var_dump((int)'012345');
			?>
			<p>Мы приводим строку "012345" к целочисленному значению, получается 12345</p>
			
		</div>
		<div>
			<p>var_dump((float)123.0 === (int)123.0);</p>
			result - 
			<?php
			var_dump((float)123.0 === (int)123.0);
			?>
			<p>Тут строгое сравнение. У нас переменные разного типа, поэтому false</p>
			
		</div>
		<div>
			<p>var_dump((int)0 === (int)'hello, world');</p>
			result - 
			<?php
			var_dump((int)0 === (int)'hello, world');
			?>
			<p>Тут опять строгое сравнение. Наши переменные одного типа. Далее переменные приводятся к булиевым значениям, где ноль это false, а 'целочисленнаятрока' тоже false. Получаем false === false - true.</p>
			
		</div>

		</div>
		
	</body>
	<style>
		.container{
			display: grid;
			grid-template-columns: 1fr 1fr 1fr 1fr;
			justify-content: space-between;
			grid-gap: 15px;
			background-color: grey;
		}
		div{
			background-color: lightgrey;
			padding: 10px;
			
		}
	</style>
	</html>
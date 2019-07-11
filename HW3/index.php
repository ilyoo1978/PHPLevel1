<?php 
	//задание 1.
	$num = 0;
	while ($num <= 100) {
		if($num % 3 === 0 && $num !== 0){
			echo $num . '</br>';
		}
		$num++;
	};

	//задание 2.
	$num = 0;
	do{
		if($num === 0){
			echo "$num это ноль. </br>";
		}
		else if($num % 2 === 0){
			echo "$num это чётное число. </br>";
		}else{
			echo "$num это нечётное число. </br>";
		}
		$num++;
	}while ($num <= 10);

	//задание 3.
	$regions = [
		'Московская область' => [
			'Москва', 'Зеленоград', 'Люберцы'
			],
		'Ленинградская область' => [
			'Санкт-Петербург', 'Пушкин', 'Выборг'
			],
		'Рязанская область' => [
			'Сасово', 'Сапожок', 'Сараи'
			]
	];
	foreach ($regions as $region => $cityes) {
		echo "$region: </br>" . implode(', ', $cityes) . '.</br>';
	};

	//задание 4
	function translite($str){
		$alphaBet = [
			'а' => 'a',
			'б' => 'b',
			'в' => 'v',
			'г' => 'g',
			'д' => 'd',
			'е' => 'e',
			'ё' => 'yo',
			'ж' => 'zh',
			'з' => 'z',
			'и' => 'i',
			'к' => 'k',
			'л' => 'l',
			'м' => 'm',
			'н' => 'n',
			'о' => 'o',
			'п' => 'p',
			'р' => 'r',
			'с' => 's',
			'т' => 't',
			'у' => 'u',
			'ф' => 'f',
			'х' => 'h',
			'ц' => 'c',
			'ч' => 'ch',
			'ь' => "'",
			'ъ' => "'",
			'ы' => 'y',
			'э' => 'e',
			'ю' => 'yu',
			'я' => 'ya'
		];
		$str = str_split($str);
		foreach ($str as $key => $char) {
			if(isset($char, $alphaBet)){
				echo $char;
				// echo $alphaBet['р'];
			};
		};
		echo implode('', $str);
	};
	translite('привет, лунатики!');
	

 ?>
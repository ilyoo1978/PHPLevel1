<?php 
//задание 1
function task1($a, $b){
	if($a >=0 && $b >= 0){
		return "разница между $a и $b = " . abs($a - $b) . '</br>';
	}elseif ($a < 0 && $b < 0) {
		return "$a * $b = " . $a * $b . '</br>';
	}else{
		return "$a + $b = " . ($a + $b) . '</br>';
	};
}

//задание 2
// echo "//задание 2 </br>";
	function fromNto15($n){
		switch ($n) {
			case 1:
			echo 1;
			echo '</br>';
			case 2:
			echo 2;
			echo '</br>';
			case 3:
			echo 3;
			echo '</br>';
			case 4:
			echo 4;
			echo '</br>';
			case 5:
			echo 5;
			echo '</br>';
			case 6:
			echo 6;
			echo '</br>';
			case 7:
			echo 7;
			echo '</br>';
			case 8:
			echo 8;
			echo '</br>';
			case 9:
			echo 9;
			echo '</br>';
			case 10:
			echo 10;
			echo '</br>';
			case 11:
			echo 11;
			echo '</br>';
			case 12:
			echo 12;
			echo '</br>';
			case 13:
			echo 13;
			echo '</br>';
			case 14:
			echo 14;
			echo '</br>';
			case 15:
			echo 15;
			echo '</br>';
			break;
		};
}
//задание 3
// echo "//задание 3 </br>";
function plus($a, $b){
	$result = $a + $b;
	echo "$a + $b = ";// это всё для оформления в этом конкретном случае, так то должно быть просто return c операцией
	return $result;
};
function minus($a, $b){
	$result = $a - $b;
	echo "$a - $b = ";// это всё для оформления в этом конкретном случае, так то должно быть просто return c операцией
	return $result;
};
function multiply($a, $b){
	$result = $a * $b;
	echo "$a * $b = ";// это всё для оформления в этом конкретном случае, так то должно быть просто return c операцией
	return $result;
};
function divide($a, $b){
	$result = $a / $b;
	echo "$a / $b = ";// это всё для оформления в этом конкретном случае, так то должно быть просто return c операцией
	return $result;
};

// echo plus(10, 15) . '</br>';
// echo minus(10, 15) . '</br>';
// echo multiply(10, 15) . '</br>';
// echo divide(10, 15) . '</br>';


// //задание 4
// echo "//задание 4 </br>";
function calc($a, $b, $operator){
	switch ($operator) {
		case '+':
			return plus($a, $b);
		case '-':
			return minus($a, $b);
		case '*':
			return multiply($a, $b);
		case '/':
			return divide($a, $b);		
	}
}
// echo calc(145, 798, '+') . '</br>';
// echo calc(145, 798, '-') . '</br>';
// echo calc(145, 798, '*') . '</br>';
// echo calc(145, 798, '/') . '</br>';


// //задание *6
// echo "//задание *6 </br>";

function power($val, $pow){
	if((int)$pow !== $pow){
		return 'Параметр pow должен быть целым числом > 1;';
	}
	if($pow > 1){
		$val *= power($val, $pow - 1);
	}
	return $val;
};

// echo power(2.5, 3.5) . '</br>';
// echo power(3, 3) . '</br>';

// //задание *7
// echo "//задание *7 </br>";

function formatTime(){
	$hours = date('G');
	$minits = date('i');
	$result = 'время: ';
	$hoursStr = '';
	$minitsStr = '';
	if($hours == 1 || $hours == 21){
		$hoursStr = 'час';
	}elseif (($hours >= 2 && $hours <= 4) || $hours == 22 || $hours == 23) {
		$hoursStr = 'часа';
	}else{
		$hoursStr = 'часов';
	};

	if(($minits - 1)%10 === 0){
		$minitsStr = 'минутa';
	}elseif (($minits >= 2 && $minits <= 4) || ($minits == 22 || $minits == 23)) {
		$minitsStr = 'минуты';
	}else{
		$minitsStr = 'минут';
	}
	return "$result $hours $hoursStr $minits $minitsStr.";
}
// echo formatTime();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DZ2</title>
</head>
<body>
	<div class="wrapper">

    <div class="content">
    	<div class="task task1"><?php 
	    	echo "//задание 1 </br>";
				echo task1(5, 6);
				echo task1(5, -6);
				echo task1(-5, -6);
			?>
    	</div>
    	<div class="task task2">
    		<?php 
    			echo "//задание 2 </br>";
				fromNto15(9);
    		 ?>
    	</div>
    	<div class="task task3">
    		<?php 
    			echo "//задание 3 </br>";
    			echo plus(10, 15) . '</br>';
				echo minus(10, 15) . '</br>';
				echo multiply(10, 15) . '</br>';
				echo divide(10, 15) . '</br>';
    		 ?>
    	</div>
    	<div class="task task4">
    		<?php 
    			//задание 4
				echo "//задание 4 </br>";
				echo calc(145, 798, '+') . '</br>';
				echo calc(145, 798, '-') . '</br>';
				echo calc(145, 798, '*') . '</br>';
				echo calc(145, 798, '/') . '</br>';
    		 ?>
    	</div>
    	<div class="task task6">
    		<?php 
    			echo "//задание *6 </br>";
				echo power(2.5, 3.5) . '</br>';
				echo power(3, 3) . '</br>';
    		 ?>
    	</div>
    </div>

    <div class="footer">
    	<h1>
    	<?php 
    		echo 'сейчас ' . date('Y') . ' год.' . '</br>' . formatTime();
    	 ?>
    	 	
    	</h1>
    </div>

</div>
<style>
	* {
		margin: 0;
		padding: 0;
	}
	.content {
		padding: 10px 15px;
		min-height: calc(100vh - 100px);
		display: grid;
		grid-gap: 15px;
		grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
	}
	.task{
		padding: 10px 15px;
		background-color: lightgrey;
		border-radius: 3px;
	}
	.footer{
		background-color: grey;
	}

</style>	
</body>
</html>

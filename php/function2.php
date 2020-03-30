<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Function</h1>
	<h2>Basic</h2>

	<?php 
	function basic(){
		print("Lorem ipsum dolor sit amet1.<br>");
		print("Lorem ipsum dolor sit amet2.<br>");
	}

	basic();
	?>

	<h2>parameter &amp; argument</h2>
	<?php 

	function sum($a,$b){
		$sum=$a+$b;
		echo "$a+$b: $sum<br>";
	}
	sum(2,4);
	sum(4,5);
	?>

	<h2>return</h2>
	<?php 

	function sum2($a,$b){
		return $a+$b;
	}

	echo "2+4: ".sum2(2,4);
	file_put_contents('function2.txt', sum2(3,5));
	?>
</body>
</html>